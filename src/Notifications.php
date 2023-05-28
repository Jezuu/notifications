<?php

namespace Notifications;

class Notifications
{
    protected static $type;

    /**
     * Sends a notification of the specified type with the given message.
     *
     * @param string $type     Notification type (success, error, info, warning).
     * @param string $message  Notification message.
     *
     * @return Notifications   Instance of the Notifications class.
     */
    public static function send($type, $message)
    {
        session()->now($type, $message);
        self::$type = $type;
        return new self();
    }

    /**
     * Generates the notification view to be displayed in the interface.
     *
     * @param string $message  Notification message.
     *
     * @return \Illuminate\Contracts\View\View  Instance of the notification view.
     */
    public static function notify($message)
    {
        $ret = view('notifications::notification')->with([
            'type' => self::$type,
            'message' => $message
        ]);
        self::$type = null;
        return $ret;
    }

    /**
     * Loads a specified view.
     *
     * @param string $view  View name.
     *
     * @return \Illuminate\Contracts\View\View  Instance of the view.
     */
    public static function view($view)
    {
        return view($view);
    }
}
