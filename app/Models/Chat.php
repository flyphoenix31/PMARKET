<?php 
namespace App\Models;
use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
use App\Helpers\DB;

class Chat
{
    public static function referedUsers($userId)
    {
        $users = DB::get()->fetchRowMany("SELECT chatdata.*,users.id,users.name,'' as thumb from (SELECT t1.*, CASE WHEN t1.from_user != :userId THEN t1.from_user ELSE t1.to_user END AS userid , (SELECT SUM(is_read=0) as unread FROM `messages` WHERE messages.to_user=:userId AND messages.from_user=userid GROUP BY messages.from_user) as unread
        FROM messages AS t1
        INNER JOIN
        (
            SELECT
                LEAST(`from_user`, `to_user`) AS sender_id,
                GREATEST(`from_user`, `to_user`) AS receiver_id,
                MAX(id) AS max_id
            FROM messages
            GROUP BY
                LEAST(sender_id, receiver_id),
                GREATEST(sender_id, receiver_id)
        ) AS t2
            ON LEAST(t1.`from_user`, t1.`to_user`) = t2.sender_id AND
            GREATEST(t1.`from_user`, t1.`to_user`) = t2.receiver_id AND
            t1.id = t2.max_id
            WHERE t1.`from_user` = :userId OR t1.`to_user` =:userId) chatdata JOIN users On users.id=userid  WHERE users.id !=:userId ORDER BY chatdata.id DESC", ['userId' => $userId]);
		if (!$users) return [];
        return $users;
    }

    public static function getContacts($userId)
    {
        $users = DB::get()->fetchRowMany("select *, (select id from messages where users.id=messages.from_user or users.id=messages.to_user order by messages.id desc limit 1) messageId from users where users.id != :userId order by messageId desc", ['userId' => $userId]);
        if (!$users) return [];
        return $users;
    }

    public static function contacts($userId)
    {
        $collection = DB::get()->fetchRowMany("SELECT * from users where id != :userId order by name", ['userId' => $userId]);
        if (!$collection) $collection = [];
        $contacts = array();
        foreach($collection as $item) {
            // var_dump($item);
            $contacts[substr(strtolower($item['name']), 0, 1)][] = $item;
        }
        return $contacts;
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