# Laravel debugbar dbal extension

When your project is using dbal as a database layer, this small extension will show all queries.

![alt text](https://raw.githubusercontent.com/xtcat/laravel-dbal-debugbar-extension
/master/docs/laravel-dbal-debugbar-extension.png)

## How to use
Require this package with composer. It is recommended to only require the package for development.

```php
composer require xtcat/laravel-dbal-debugbar-extension --dev
```

Add the following line to your service provider list (app.php): 

```php
\Xtcat\LaravelDbalDebugbarExtension\LaravelDbalDebugbarExtensionServiceProvider::class
```

The new tab will be enabled when APP_DEBUG is true.

Enjoy!
