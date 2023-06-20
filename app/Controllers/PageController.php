<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use App\Helpers\View;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        // require_once APP_ROOT . '/views/home.php';
        View::render('admin.index');
	}
}