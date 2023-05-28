<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notification Settings
    |--------------------------------------------------------------------------
    |
    | This section defines the general settings for notifications.
    |
    */
    'settings' => [
        'element' => 'body', // Element where the notifications will be displayed
        'position' => null, // Position of the notifications (optional)
        'allow_dismiss' => true, // Whether to allow dismissing the notifications
        'newest_on_top' => false, // Whether to show the newest notifications on top
        'showProgressbar' => false, // Whether to show a progress bar for timed notifications
        'placement' => [
            'from' => 'top', // Notification placement from the top
            'align' => 'center', // Notification alignment within the placement
        ],
        'offset' => 20, // Offset value for positioning the notifications
        'spacing' => 10, // Spacing between notifications
        'z_index' => 1031, // Z-index of the notifications
        'delay' => 3300, // Delay before the notification is automatically closed
        'timer' => 1000, // Timer duration for timed notifications
        'url_target' => '_blank', // Target attribute for notification URLs
        'mouse_over' => null, // Callback function when mouse hovers over a notification
        'animate' => [
            'enter' => 'animated bounceInDown', // CSS class for enter animation
            'exit' => 'animated bounceOutUp', // CSS class for exit animation
        ],
        'onShow'=> null, // Callback function when notification is shown
        'onShown' => null, // Callback function after notification is shown
        'onClose' => null, // Callback function when notification is closed
        'onClosed' => null, // Callback function after notification is closed
        'icon_type' => 'class', // Type of icon used in notifications
    ],

    /*
    |--------------------------------------------------------------------------
    | Notification Types
    |--------------------------------------------------------------------------
    |
    | This section defines different notification types with their respective
    | classes, titles, and icons.
    |
    */
    'types' => [
        'success' => [
            'class' => 'success', // CSS class for success notifications
            'title' => 'Success', // Title for success notifications
            'icon' => 'fa-solid fa-check fa-bounce', // Icon for success notifications
        ],
        'error' => [
            'class' => 'danger', // CSS class for error notifications
            'title' => 'Error', // Title for error notifications
            'icon' => 'fa-solid fa-xmark fa-bounce', // Icon for error notifications
        ],
        'info' => [
            'class' => 'info', // CSS class for info notifications
            'title' => 'Information', // Title for info notifications
            'icon' => 'fa-solid fa-info fa-bounce', // Icon for info notifications
        ],
        'warning' => [
            'class' => 'warning', // CSS class for warning notifications
            'title' => 'Warning', // Title for warning notifications
            'icon' => 'fa-solid fa-exclamation fa-bounce', // Icon for warning notifications
        ],
    ],
];
