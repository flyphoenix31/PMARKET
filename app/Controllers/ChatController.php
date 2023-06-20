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
        $users = Chat::referedUsers(Auth::get()['id']);
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
}
