<?php

namespace Notifications;

class Notifications
{
    public static function notify($type, $message)
    {
        echo '<div class="alert alert-'.$type.'">' . $message . '</div>';
    }
}
