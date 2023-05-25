# Notifications

Notifications is a Laravel package that provides a comprehensive solution for displaying notifications in your application. It offers predefined components and styles to showcase success messages, errors, warnings, and informative messages in an appealing manner.

## Features

- Display success, error, warning, and informative notifications.
- Customize the notification type, associated icon, and displayed message.
- Seamless integration with Font Awesome and Bootstrap Notify for a sleek experience.
- Easy to use and customize.

## Requirements

- PHP >= 7.2
- Laravel >= 6.0

## Installation

1. Run the following command to install the package via Composer:

   ```bash
   composer require jezuu/notifications
   ```
   
2. Publish the package's configuration and views by running the following command:

   ```bash
   php artisan vendor:publish --provider="Notifications\NotificationsServiceProvider"
   ```
   
## Usage

You can use the "Notifications" package in Laravel to display notifications in your application. Here are examples of how to use it from the controller and Blade view:

### In Controller:

```php
use Illuminate\Support\Facades\Session;

public function store(Request $request)
{
    Session::flash('success', 'Success! Data has been stored.');

    return redirect()->back();
}
```
In this example, we use the Session facade to store a success message in the session with the key 'success'. Then, we redirect back to the previous page.

### In Blade View:

```blade
{{-- Display a success notification --}}
@if (session('success'))
    {!! Notifications::notify('success', session('success')) !!}
@endif
```

You can customize the notification type, message, and other parameters according to your needs.

In this example, the notify() method from the Notifications class is used to display a success notification. You can pass the desired notification type ('success', 'error', 'warning', 'info') as the first argument and the notification message as the second argument.

Make sure you have properly configured the package and imported the necessary namespaces in your Blade view to use the Notifications class.
