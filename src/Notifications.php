<?php

namespace Notifications;

class Notifications
{
    public static function notify($type, $message)
    {
        dd($type, $message);
        return view('notifications::notification', compact('type', 'message'));
    }
}
