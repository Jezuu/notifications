<?php

namespace Notifications;

use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'notifications');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/notifications'),
        ], 'views');
    }

    public function register()
    {
        $this->app->singleton('notifications', function () {
            return new Notifications();
        });
    }
}
