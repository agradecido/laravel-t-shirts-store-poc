# laravel-t-shirts-store-poc
A Proof of Concept for an online T-shirt store built with Laravel.

## Initial setup
The following commands will set up the Laravel project and add Laravel Sail for a Docker-based development environment.

```shell
# Create a new Laravel project
composer create-project laravel/laravel laravel-t-shirts-store-poc

# Add Laravel Sail for Docker support
composer require laravel/sail --dev
php artisan sail:install

# Run the containers
sail up -d
```
