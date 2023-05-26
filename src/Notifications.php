<?php

namespace Notifications;

class Notifications
{
    public static function send($type, $message)
    {
        session()->flash($type, $message);
        return new self();
    }

    public static function notify($type, $message)
    {
        return view('notifications::notification', compact('type', 'message'));
    }

    public static function view($view)
    {
        return view($view);
    }
}
