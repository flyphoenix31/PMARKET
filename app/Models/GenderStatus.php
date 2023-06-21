<?php 
namespace App\Models;
use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
use App\Helpers\DB;

class GenderStatus
{
    public static function getAll()
    {
        $genders = DB::get()->fetchRowMany('Select * from gender_statuses');
		if (!$genders) return [];
        return $genders;
    }
}