<?php 
namespace App\Models;
use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
use App\Helpers\DB;

class Role
{
    public static function getAll()
    {
        $roles = DB::get()->fetchRowMany('Select * from roles');
		if (!$roles) return [];
        return $roles;
    }
}