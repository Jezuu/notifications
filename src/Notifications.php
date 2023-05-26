<?php

namespace Notifications;

class Notifications
{
    protected static $type;

    public static function send($type, $message)
    {
        session()->flash($type, $message);
        self::$type = $type;
        return new self();
    }

    public static function notify($message)
    {
        return view('notifications::notification')->with([
            'type' => self::$type,
            'message' => $message
        ]);
    }

    public static function view($view)
    {
        return view($view);
    }
}
