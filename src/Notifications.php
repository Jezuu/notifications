<?php

namespace Notifications;

class Notifications
{
    protected static $type;
    protected static $static;

    /**
     * Sends a notification of the specified type with the given message.
     *
     * @param string $type     Notification type (success, error, info, warning).
     * @param string $message  Notification message.
     * @param bool $static     Indicates whether the notification should be static.
     *
     * @return Notifications   Instance of the Notifications class.
     */
    public static function send($type, $message, $static = false)
    {
        session()->now($type, $message, $static);

        self::$static = $static;
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
            'static' => self::$static,
            'type' => self::$type,
            'message' => $message,
        ]);

        self::$static = false;
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
