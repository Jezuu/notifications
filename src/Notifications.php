<?php

namespace NombreDelPaquete;

class Notifications
{
    public static function notify($type, $message)
    {
        return view('notifications::notify', compact('type', 'message'));
    }
}
