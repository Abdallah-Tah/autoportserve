# AutoPortServe

## About

AutoPortServe is a Laravel package that helps you start your Laravel development server and npm development server on available ports dynamically. This package will automatically scan and find a free port, starting from 8000, for the Laravel server and run the npm development server in parallel. It's a handy tool for full-stack developers who work with multiple Laravel applications and require running npm tasks simultaneously.

## Installation

You can install the package via composer:

```bash
composer require amohamed/autoportserve
```

Register the service provider in your `config/app.php` file:

```bash
'providers' => [
    // ...
    Amohamed\AutoPortServe\AutoPortServeServiceProvider::class,
];
```

## Usage

Once you have installed the package, you can use the `serve:dynamic` artisan command to start your Laravel server on an available port:

```bash
php artisan serve:dynamic
```

The command will print out a message with the URL where your application is being served, such as:

```
Laravel development server started: <http://127.0.0.1:8000>
```

## Features

Dynamic port selection for Laravel server starting from 8000
Runs npm development server in parallel
Easy to use, integrates seamlessly with the native php artisan serve command
Perfect for full-stack developers working on multiple Laravel projects
## Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! Please feel free to submit a pull request.

## License

This package is open-sourced software licensed under the MIT license.

---

**Note:** Be sure to replace any placeholder information with the actual details about your package. For example, you might have a different command to run tests, or you might want to include more detailed information about how to contribute to your package.
