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
            __DIR__.'/../public' => public_path('vendor/notifications'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../config/notifications.php' => config_path('notifications.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'notifications');
    }

    public function register()
    {
        $this->app->alias(Notifications::class, 'notifications');

        $providerClass = get_class($this);
        $packageName = strtolower(substr($providerClass, strrpos($providerClass, '\\') + 1, -17));

        $this->app->alias(Notifications::class, $packageName);

        $this->mergeConfigFrom(__DIR__.'/../config/notifications.php', 'notifications');
    }
}
