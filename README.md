# laravel-t-shirts-store-poc
A Proof of Concept for an online T-shirt store built with Laravel.

## Initial setup
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
