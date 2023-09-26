<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# manage-tasks-app
Laravel simple manage tasks (Create, Read, Update and Delete) application using laravel inbuild authentication,with login and signup for user.And Super admin can manage all tasks . Here is a step by step guide to install it.

## Setup Guide
Step 1: Clone this project
```
git clone https://github.com/MohamedMagdy63/manage-tasks-app
```

Step 2: Install project dependencies using composer.
```
composer install
```

Step 3: Copy .env.example file to .env file.
```
cp .env.example .env
```

Step 4: Configure database credentials in .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=manage_tasks
DB_USERNAME=root
DB_PASSWORD=
```

Step 5: Run artisan migration command to migrate table.
```
php artisan migrate
```

Step 6: Run artisan serve command to start app server.
```
php artisan serve
```

Step 7: Open browser and navigate http://127.0.0.1:8000

If everything works it will open welcome screen in browser

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
