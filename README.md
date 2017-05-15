# [Shieldfy Laravel Client](https://shieldfy.io/) 

This is a Laravel package for Shieldfy SDK



[![Packagist](https://img.shields.io/packagist/v/shieldfy/shieldfy-laravel-client.svg?label=Packagist&style=flat-square)](https://packagist.org/packages/shieldfy/shieldfy-laravel-client)
[![StyleCI](https://styleci.io/repos/77051902/shield)](https://styleci.io/repos/77051902)



## Installation

You will need first to register on [shieldfy.io](https://shieldfy.io/) to get your APP Key & APP Secret.


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

for more information about configurations and usage , go to the official documentation [docs.shieldfy.io/docs](https://docs.shieldfy.io)

## Contributing 

Thank you for considering contributing to this project!
Bug reports, feature requests, and pull requests are very welcome.


## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to security@shieldfy.com.


