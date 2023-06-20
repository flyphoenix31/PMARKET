<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('loginPage', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'AuthController', 'method'=>'index', 'middleware' => array(array('class'=>'Auth', 'method'=>'public'))), array(), array(), '', array(), array('GET')));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'AuthController', 'method'=>'login'), array(), array(), '', array(), array('POST')));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'AuthController', 'method'=>'logout'), array(), array(), '', array(), array('GET')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('GET')));
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));