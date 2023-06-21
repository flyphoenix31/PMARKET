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

    public static function findOne($conds)
    {
        $query = 'Select * from users where 1=1';
        forEach(array_keys($conds) as $key)
        {
            $query .= " and ".$key."= :".$key;
        }
        return DB::get()->fetchRow($query, $conds);
    }

    public static function find($id)
    {
        return DB::get()->fetchRow('Select * from users where id=:id', ['id' => $id]);
    }

    public static function create($user)
    {
        $id = DB::get()->insert('users', $user);
        return User::find($id);
    }
}