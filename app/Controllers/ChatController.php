<?php

namespace App\Controllers;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Symfony\Component\Routing\RouteCollection;
use App\Helpers\View;
use App\Middleware\Auth;

class ChatController
{
    // Homepage action
    public function index(RouteCollection $routes)
    {
        // $users = Chat::referedUsers(Auth::get()['id']);
        $users = Chat::getContacts(Auth::get()['id']);
        $contacts = Chat::contacts(Auth::get()['id']);
        // $groupdata = Chat::groupdata(Auth::get()['id']);
        $AttachedFiles = Chat::attachedFiles(Auth::get()['id']);
        echo json_encode(array(
            'status' => 0,
            'users' => $users,
            'contacts' => $contacts,
            // 'groupdata' => $groupdata,
            'AttachedFiles' => $AttachedFiles
        ));
    }

    public function getMessage(RouteCollection $routes)
    {
        $user_id = $_GET['user_id'];
        $my_id = Auth::get()['id'];
        // Make read all unread
        Message::makeRead($user_id, $my_id);
        // Get all message from selected user
        $messages = Message::getWithUser($my_id, $user_id);
        Message::makeRead($user_id, $my_id);
        // Get Receiver user Detail
        $chatUser = User::find($user_id);
        echo json_encode(array(
            'status' => 0,
            'messages' => $messages,
            'chatUser' => $chatUser
        ));
    }

    public function getLastMessage(RouteCollection $routes)
    {
        $user_id = $_GET['user_id'];
        $my_id = Auth::get()['id'];
        // Make read all unread
        Message::makeRead($user_id, $my_id);
        // Get all message from selected user
        $messages = Message::getLastWithUser($my_id, $user_id);
        // Get Receiver user Detail
        $chatUser = User::find($user_id);
        echo json_encode(array(
            'status' => 0,
            'messages' => $messages,
            'chatUser' => $chatUser
        ));
    }

    public function sendMessage(RouteCollection $routes)
    {
        $message = array();
        $message['from_user'] = Auth::get()['id'];
        $message['to_user']= $_POST['receiver_id'];
        $message['message'] = $_POST['message'];
        // $message['created_at'] = date('yyyy-MM-dd HH:mm:ss', time());
        $message['created_at'] = date('Y-m-d H:i:s');
        $message['updated_at'] = date('Y-m-d H:i:s');
        $file = isset($_POST['file'])?$_POST['file']:null;

        if ($file != null) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filepath = PUBLIC_ROOT . '/Upload/';
            $file->move($filepath, $filename);
            $message['file'] = 'Upload/' . $filename;
        }
        $message['is_read'] = 0;
        $message = Message::save($message);
        echo json_encode(array(
            'status' => 0,
            'message' => $message,
        ));
    }

    public function setRead(RouteCollection $routes)
    {
        Message::makeRead($_POST['from'], Auth::get()['id']);
        echo json_encode(array(
            'status' => 0
        ));
    }

    public function getUnreadCounts(RouteCollection $routes)
    {
        $row = Message::getUnreadCounts(Auth::get()['id'], isset($message['from'])?$message['from']:'');
        echo json_encode(array(
            'status' => 0,
            'unread' => $row['unreadCount']
        ));
    }

    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }
        return round($bytes, 2) . ' ' . $units[$i];
    }

    public function deleteMessage($id)
    {
        Message::delete($id);
    }

    public function deleteConversation($user_id)
    {
        $user_id = $_POST['user_id'];
        $my_id = Auth::get()['id'];
        // Get all message from selected user
        Message::deleteConversation($user_id, $my_id);
    }

    // // Send Typing using Pusher
    // public function sendTyping(Request $request)
    // {
    //     $from = Auth::id();
    //     $to = $request->receiver_id;
    //     $options = array(
    //         'cluster' => env('PUSHER_APP_CLUSTER'),
    //         'useTLS' => true
    //     );
    //     $pusher = new Pusher(
    //         env('PUSHER_APP_KEY'),
    //         env('PUSHER_APP_SECRET'),
    //         env('PUSHER_APP_ID'),
    //         $options
    //     );
    //     $data = ['from_user' => $from, 'to_user' => $to, 'typing' => true]; // showing typing notification when a user is typing a message
    //     $pusher->trigger('my-channel', 'my-event', $data);
    // }
}
