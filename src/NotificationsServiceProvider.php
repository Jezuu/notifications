<?php

namespace Notifications;

use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/notifications'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/notifications.php' => config_path('notifications.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'notifications');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/notifications.php', 'notifications');
        $this->app->alias(Notifications::class, 'notifications');
    }
}
