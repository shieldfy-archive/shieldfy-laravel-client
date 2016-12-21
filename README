# [Shieldfy Laravel Client](https://shieldfy.io/) 

This is a Laravel package for Shieldfy SDK


## Installation

You will need first to register on [shieldfy.com](https://shieldfy.com/) to get your APP Key & APP Secret.


Through Composer (the recommended way)

```
composer require shieldfy/shieldfy-laravel-client
```

### Configuration

After installing the Shieldfy laravel library, register the `Shieldfy\ShieldfyLaravelClient\ShieldfyServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    ...
    Shieldfy\ShieldfyLaravelClient\ShieldfyServiceProvider::class,
],
```

Shieldfy takes its config from environment file `.env`

```
SHIELDFY_APP_KEY=YOUR_APP_KEY
SHIELDFY_APP_SECRET=YOUR_APP_SECRET
```


Add Shieldfy Middleware

If you’d like to configure Shieldfy further you can publish the configurations file.

```
php artisan vendor:publish
```

A file called shieldfy.php will be placed into your config folder `config/shieldfy.php`.


## Usage

Add Shieldfy middleware in your `app/Http/Kernel.php`

```php
protected $middleware = [
    ...
    \Shieldfy\ShieldfyLaravelClient\Middlewares\ShieldfyMiddleware::class
];

```

for more information about configurations and usage , go to the official documentation [shieldfy.com/docs](https://shieldfy.com/docs)

## Contributing 

Thank you for considering contributing to this project!
Bug reports, feature requests, and pull requests are very welcome.


## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to security@shieldfy.com.


