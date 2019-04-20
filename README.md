
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel 5.7 test api with jwt authentication
> Test api app with  article and jwt auth. 


## Download
```
# clone
git clone https://github.com/PawelSrzednicki/Laravel-ApiExample.git

# Access project
cd Laravel-simple-news-site
```

## Installation
```
# Install missing files
composer install

# Create file .env
cp .env.example .env

# Generate key
php artisan key:generate

# Generate jwt secret
php artisan jwt:secret

# Run migrations (tables and Seeders)
php artisan migrate --seed

# install bootstrap and all dependencies
npm install

# create css and js files 
npm run dev - for development

npm run prod - for production

# run build in server
php artisan serve

# Access project
http://localhost:8080
```
