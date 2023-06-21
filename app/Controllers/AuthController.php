<?php

namespace App\Controllers;

use App\Models\GenderStatus;
use Symfony\Component\Routing\RouteCollection;
use App\Helpers\View;
use App\Helpers\DB;
use App\Models\User;
use App\Middleware\Auth;
use App\Models\Role;

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
    public function logout(RouteCollection $routes)
    {
        Auth::remove();
        header('Location: ' . '/login');
        return die();
    }

    public function registerPage(RouteCollection $routes)
    {

        View::render('register', array('genders' => GenderStatus::getAll(), 'roles' => Role::getAll()));
    }

    public function register(RouteCollection $routes)
    {
        $newUser = array("status_id" => 1, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'));
        $fields = ['name', 'username', 'email', 'phone', 'password', 'confirm_password', 'gender', 'role'];
        foreach ($fields as $field) {
            if (!isset($_POST[$field]) || $_POST[$field] == '') {
                echo json_encode(array('status' => 1, 'error' => array(''. $field => 'Please input '.$field.'.')));
                return;
            }
            if ($field != 'confirm_password' && $field != 'role')
            {
                if ($field == 'gender') {
                    $newUser['gender_id'] = $_POST[$field];
                } else {
                    $newUser[$field] = $_POST[$field];
                }
            }
        }
        if (!isset($_POST['confirm_password']) || $_POST['confirm_password'] == '' || $_POST['confirm_password'] != $_POST['password']) {
            echo json_encode(array('status' => 1, 'error' => array('confirm_password' => 'Please confirm your password.')));
            return;
        }

        $newUser['password'] = crypt($newUser['password'], '$2a$07$usesomesillystringforsalt$');

        $duplicateCheckFields = ['name', 'email'];
        foreach($duplicateCheckFields as $field) {
            if (User::findOne(array($field => $_POST[$field])))
            {
                echo json_encode(array('status' => 1, 'error' => array($field => 'Already in use.')));
                return;
            }
        }

        $user = User::create($newUser);
        echo json_encode(array(
            'status' => 0,
            'user' => $user
        ));
    }
}
