<?php 

namespace App\Helpers;

class View
{
    // Homepage action
	public static function render($viewRoute, $params = null)
	{
        require APP_ROOT . '/views/' . str_replace(".", "/", $viewRoute) . '.php';
	}
}