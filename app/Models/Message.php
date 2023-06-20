<?php 
namespace App\Models;
use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
use App\Helpers\DB;

class Message
{
    public static function makeRead($from_user, $to_user)
    {
        DB::get()->update('messages', ['from_user' => $from_user, 'to_user' => $to_user, 'is_read' => 0], ['is_read' => 1]);
    }

    public static function getWithUser($user1, $user2)
    {
        $messages = DB::get()->fetchRowMany("SELECT * from messages where (from_user=:user1 and to_user=:user2) or (from_user=:user2 and to_user=:user1)", ['user1' => $user1, 'user2' => $user2]);
        if (!$messages) $messages = [];
        return $messages;
    }

    public static function getLastWithUser($user1, $user2)
    {
        $messages = DB::get()->fetchRowMany("SELECT * from messages where (from_user=:user1 and to_user=:user2) or (from_user=:user2 and to_user=:user1) order by id desc limit 1", ['user1' => $user1, 'user2' => $user2]);
        if (!$messages) $messages = [];
        return $messages;
    }

    public static function groupdata($userId)
    {
    }

    public static function attachedFiles($userId)
    {
        $AttachedFiles = DB::get()->fetchRowMany("SELECT * from messages where (from_user=:userId or to_user=:userId) and file != null", ['userId' => $userId]);
        if (!$AttachedFiles) return [];
        return $AttachedFiles;
    }
}