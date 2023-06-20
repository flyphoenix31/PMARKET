<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use App\Helpers\View;
use App\Helpers\DB;
use App\Models\User;
use App\Middleware\Auth;

class AuthController
{
    // Homepage action
    public function index(RouteCollection $routes)
    {
        View::render('login');
    }
    public function login(RouteCollection $routes)
    {
        if (!isset($_POST['email']) || $_POST['email'] == '') {
            echo json_encode(array('status' => 1, 'error' => array('email' => 'Please input your email.')));
            return;
        }

        if (!isset($_POST['password']) || $_POST['password'] == '') {
            echo json_encode(array('status' => 1, 'error' => array('password' => 'Please input your password.')));
            return;
        }

        $user = User::checkLogin('', $_POST['email'], $_POST['password']);
        if (!$user) {
            echo json_encode(array('status' => 1, 'error' => array('summary' => 'Incorrect username or password.')));
            return;
        }
        
        Auth::set($user);
        echo json_encode(array('status' => 0));
    }
}
