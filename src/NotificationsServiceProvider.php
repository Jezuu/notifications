<?php

namespace Notifications;

use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Registra las vistas del paquete
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'notifications');

        // Publica las vistas del paquete
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/notifications'),
        ], 'views');
    }
}
