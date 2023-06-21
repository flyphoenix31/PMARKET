<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('loginPage', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'AuthController', 'method'=>'index', 'middleware' => array(array('class'=>'Auth', 'method'=>'public'))), array(), array(), '', array(), array('GET')));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'AuthController', 'method'=>'login'), array(), array(), '', array(), array('POST')));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'AuthController', 'method'=>'logout'), array(), array(), '', array(), array('GET')));

$routes->add('chat', new Route(constant('URL_SUBFOLDER') . '/chat', array('controller' => 'ChatController', 'method'=>'index', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('POST')));
$routes->add('chat/messages', new Route(constant('URL_SUBFOLDER') . '/chat/message', array('controller' => 'ChatController', 'method'=>'getMessage', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('GET')));
$routes->add('chat/messages/new', new Route(constant('URL_SUBFOLDER') . '/chat/message/new', array('controller' => 'ChatController', 'method'=>'sendMessage', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('POST')));
$routes->add('chat/messages/delete', new Route(constant('URL_SUBFOLDER') . '/chat/message/delete', array('controller' => 'ChatController', 'method'=>'deleteMessage', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('POST')));
$routes->add('chat/conversation/delete', new Route(constant('URL_SUBFOLDER') . '/chat/conversation/delete', array('controller' => 'ChatController', 'method'=>'deleteConversation', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('POST')));
$routes->add('chat/lastMessages', new Route(constant('URL_SUBFOLDER') . '/chat/lastMessage', array('controller' => 'ChatController', 'method'=>'getLastMessage', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('GET')));
$routes->add('chat/getUnreadCounts', new Route(constant('URL_SUBFOLDER') . '/chat/getUnreadCounts', array('controller' => 'ChatController', 'method'=>'getUnreadCounts', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('POST')));
$routes->add('/chat/setRead', new Route(constant('URL_SUBFOLDER') . '/chat/setRead', array('controller' => 'ChatController', 'method'=>'setRead', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('POST')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction', 'middleware' => array(array('class'=>'Auth', 'method'=>'private'))), array(), array(), '', array(), array('GET')));
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));

//register route
// $routes->add('registerPage', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('registerPage', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'AuthController', 'method'=>'registerPage', 'middleware' => array(array('class'=>'Auth', 'method'=>'public'))), array(), array(), '', array(), array('GET')));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'AuthController', 'method'=>'register', 'middleware' => array(array('class'=>'Auth', 'method'=>'public'))), array(), array(), '', array(), array('POST')));