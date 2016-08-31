## Installation

Begin by installing this package through Composer. Run this command from the Terminal:

```bash
composer require farhatabbas/laravel-faye
```

## Laravel integration

To wire this up in your Laravel project, whether it's built in Laravel 5, you need to add the service provider.
Open `config/app.php`, and add a new item to the providers array.

```php
Farhatabbas\Faye\FayeServiceProvider::class,
```

There's a Facade class available for you, if you like. In your `app.php` config file add the following
line to the `aliases` array if you want to use a short class name:

```php
'Faye' => Farhatabbas\Faye\Facade\Faye::class,
```

In Laravel 5 you can publish the default config file to `config/faye.php` with the artisan command
```php
php artisan vendor:publish
```
#### Facade

First, include the `Facade` class at the top of your file:

```php
use Farhatabbas\Faye\Facade\Faye;
```

#### Usage

```php
Route::get('/',function(){
   Faye::send("/channel", ['data'=>'Hello World!'], ['token'=>'123456789']);
});
```
