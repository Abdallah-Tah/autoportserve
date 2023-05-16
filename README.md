# AutoPortServe

## About

AutoPortServe is a Laravel package that helps you start your Laravel development server on an available port dynamically. This package will automatically scan and find a free port, starting from 8000, and will use that port to serve your Laravel application. It's a handy tool for developers who work with multiple Laravel applications simultaneously and don't want to manually specify different ports for each application.

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