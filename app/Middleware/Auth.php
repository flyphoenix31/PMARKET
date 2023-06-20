<?php 

namespace App\Middleware;

class Auth
{
    public static function get()
    {
        if (isset($_SESSION['auth'])) {
            return $_SESSION['auth'];
        }
        return null;
    }
    public static function set($user)
    {
        if (!$user)
        {
            unset($_SESSION['auth']);
        }
        else
            $_SESSION['auth'] = $user;
    }
    // Homepage action
    public function public($next)
    {
        if (Auth::get())
        {
            header('Location: ' . '/');
            return die();
        }
        $next();
    }
	public function private($next)
	{
        if (!Auth::get())
        {
            header('Location: ' . '/login');
            return die();
        }
        $next();
	}
}