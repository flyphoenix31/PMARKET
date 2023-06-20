<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;
use App\Helpers\DB;

class Router
{
    public $nextApplied;
    public function __invoke(RouteCollection $routes)
    {
        $context = new RequestContext();
        $context->fromRequest(Request::createFromGlobals());

        // Routing can match routes with incoming requests
        $matcher = new UrlMatcher($routes, $context);
        try {
            $arrayUri = explode('?', $_SERVER['REQUEST_URI']);
            $matcher = $matcher->match($arrayUri[0]);

            // Cast params to int if numeric
            array_walk($matcher, function (&$param) {
                if (is_numeric($param)) {
                    $param = (int) $param;
                }
            });

            $middlewareCount = isset($matcher['middleware']) ? count($matcher['middleware']) : 0;
            // $nextApplied = true;
            $this->nextApplied = false;
            $nextFuc = function () {
                $this->nextApplied = true;
            };
            for ($i = 0; $i < $middlewareCount; $i++) {
                $this->nextApplied = false;
                $className = '\\App\\Middleware\\' . $matcher['middleware'][$i]['class'];
                $classInstance = new $className();
                call_user_func_array(array($classInstance, $matcher['middleware'][$i]['method']), array($nextFuc));
                if (!$this->nextApplied) break;
            }
            unset($matcher['middleware']);
            if ($i == $middlewareCount) {
                // https://github.com/gmaccario/simple-mvc-php-framework/issues/2
                // Issue #2: Fix Non-static method ... should not be called statically

                $data = json_decode(file_get_contents('php://input'), true);
                if ($data != null) {
                    $_POST = $data;
                }

                $className = '\\App\\Controllers\\' . $matcher['controller'];
                $classInstance = new $className();

                // Add routes as paramaters to the next class
                $params = array_merge(array_slice($matcher, 2, -1), array('routes' => $routes));
                call_user_func_array(array($classInstance, $matcher['method']), $params);
            }
            DB::get()->close();
        } catch (MethodNotAllowedException $e) {
            echo 'Route method is not allowed.';
        } catch (ResourceNotFoundException $e) {
            http_response_code(404);
            die();
            // echo 'Route does not exists.';
        } catch (NoConfigurationException $e) {
            echo 'Configuration does not exists.';
        }
    }
}

// Invoke
$router = new Router();
$router($routes);
