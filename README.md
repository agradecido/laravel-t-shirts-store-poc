# laravel-t-shirts-store-poc
A Proof of Concept for an online T-shirt store built with Laravel.

## 1. Initial setup
The following commands will set up the Laravel project and add Laravel Sail for a Docker-based development environment:

```shell
# Create a new Laravel project
composer create-project laravel/laravel laravel-t-shirts-store-poc

# Add Laravel Sail for Docker support
composer require laravel/sail --dev
php artisan sail:install

# Run the containers
sail up -d
```

## Install Larastan
Larastan, a code analysis tool for Laravel, can be installed using Composer:

```shell
# Install Larastan for code analysis
composer require larastan/larastan:^2.0 --dev
```

Then, create a phpstan.neon file in the root of your application. It might look like this:

```neon
includes:
    - vendor/larastan/larastan/extension.neon

parameters:

    paths:
        - app/

    # Level 9 is the highest level
    level: 5

#    ignoreErrors:
#        - '#PHPDoc tag @var#'
#
#    excludePaths:
#        - ./*/*/FileToBeExcluded.php
#
#    checkMissingIterableValueType: false
```

To start analyzing the code:

```shell
./vendor/bin/phpstan analyse
```

## Install Telescope

```shell
# Install Laravel Telescope
composer require laravel/telescope --dev

# Publish the Assets
sail artisan telescope:install
 
# Create tables
sail artisan migrate
```

After running `telescope:install`, you should remove the `TelescopeServiceProvider` service provider registration from your application's `config/app.php` configuration file. Instead, manually register Telescope's service providers in the register method of your `App\Providers\AppServiceProvider` class. We will ensure the current environment is local before registering the providers:

```php
/**
 * Register any application services.
 */
public function register(): void
{
    if ($this->app->environment('local')) {
        $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        $this->app->register(TelescopeServiceProvider::class);
    }
}
```
The Telescope dashboard may be accessed via the `/telescope` route.

## Install Larevel Pint
[Laravel Pint](https://github.com/laravel/pint) is an opinionated PHP code style fixer for minimalists. Pint is built on top of PHP-CS-Fixer and makes it simple to ensure that your code style stays clean and consistent.

```shell
# Install Laravel Pint
composer require laravel/pint --dev

# Run Pint
./vendor/bin/pint

# Run Pint on a directory
./vendor/bin/pint app/Models
./vendor/bin/pint app/Models/User.php
```
