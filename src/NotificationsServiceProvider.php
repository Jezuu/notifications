<?php

namespace Notifications;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class NotificationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('notifications');

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

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        AliasLoader::getInstance()->alias('notifications', '\Notifications\Notifications');

        $this->mergeConfigFrom(__DIR__.'/../config/notifications.php', 'notifications');
    }
}
