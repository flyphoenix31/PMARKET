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

    public static function getUnreadCounts($to)
    {
        $totalUnread = DB::get()->fetchRow('select count(*) unreadCount from messages where to_user=:to and is_read=0', ['to' => $to])['unreadCount'];
        $unreads = DB::get()->fetchRowMany("select count(id) unreadCount, from_user from messages where to_user = :to and is_read = 0 group by from_user", ['to' => $to]);
        if (!$unreads) $unreads = [];
        return array('totalUnread' => $totalUnread, 'unreads' => $unreads);
    }

    public static function save($message)
    {
        $id = DB::get()->insert('messages', $message);
        return DB::get()->fetchRow("Select * from messages where id=:id", ['id' => $id]);
    }

    public static function delete($id)
    {
        DB::get()->delete('messages', ['id' => $id]);
    }

    public static function deleteConversation($user1, $user2)
    {
        DB::get()->delete('messages', "(from_user=:user1 and to_user=:user2) or (from_user=:user2 and to_user=:user1)", ['user1' => $user1, 'user2' => $user2]);
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