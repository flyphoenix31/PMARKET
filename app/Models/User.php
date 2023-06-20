<?php 
namespace App\Models;
use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
use App\Helpers\DB;

class User
{
    public static function checkLogin($name, $email, $password)
    {
        $user = DB::get()->fetchRow('Select * from users where email=:email and status_id=:status_id', ['email' => $email, 'status_id' => 1]);
		if (!$user) return $user;
		if (password_verify($password, $user['password']))
			return $user;
		return null;
    }

    public static function find($id)
    {
        return  DB::get()->fetchRow('Select * from users where id=:id', ['id' => $id]);
    }
}