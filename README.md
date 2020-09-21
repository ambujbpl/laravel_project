<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Project Quick Setup Guide

basic setup need is composer \
install laravel globally :- composer global require laravel/installer \

----------------------------------------------------------------------- \

check laravel install globally :- laravel -v :- current installer -> Laravel Installer 4.0.4 \
create new laravel projects:- laravel new YourProjectName \

---------------------------------------------------------------------------------------------- \

start the project:-  php artisan serve \
aplication should open port 8000 :- http://127.0.0.1:8000/   \

----------------------------------------------------------- \

create new controller :- php artisan make:controller PizzaController \
use App\Http\Controllers\UserController; \

----------------------------------------------------------- \

Listing All Available Commands :- php artisan list \

Viewing The Help Screen For A Command :- php artisan help migrate \

Check Laravel Version :- php artisan --version \

----------------------------------------------------------- \
database connection set on .env file  \

add new migration :- php artisan make:migration create_pizzas_table  \

run migration : php artisan migrate  \
run migration : php artisan migrate:fresh (restart frsh migration on db) \
migrate:fresh        Drop all tables and re-run all migrations \
migrate:install      Create the migration repository \
migrate:refresh      Reset and re-run all migrations \
migrate:reset        Rollback all database migrations \
migrate:rollback     Rollback the last database migration \
migrate:status       Show the status of each migration \

----------------------------------------------------------- \

Create a Pizza Model :- php artisan make:model Pizza \

----------------------------------------------------------- \


Work with scss \
need nodejs for dependency injection related to webpack and scss compiler with laravel run :- npm install \

npm run dev { for development scss parser} \
npm run watch { will check all changes and compile sacc to css } \

------------------------------------------------------------------ \

Add laravel auth syatem using laravel/ui plugin \

install it using :- composer require laravel/ui \
install authentication Ui :- php artisan ui vue --auth \
Please run "npm install && npm run dev" to compile your fresh scaffolding. \

to check all available route :- php artisan route:list \

------------------------------------------------------------------------------ \

Create New Model andd Controller using single command  \
php artisan make:model Kabab -mc  \

------------------------------------------------------------ \

Advance authentication using laravel jetstream \
create a fresh project and configure :-  \
composer require laravel/jetstream \
php artisan jetstreem:install livewire \

--------------------------------------------------------------- \

Mail using google gmail:- \

MAIL_MAILER=smtp \
MAIL_HOST=smtp.googlemail.com \
MAIL_PORT=465 \
MAIL_USERNAME=YourMail \
MAIL_PASSWORD=YourPassword \
MAIL_ENCRYPTION=ssl \
MAIL_FROM_ADDRESS=ambuj@gmail.com \
MAIL_FROM_NAME="${APP_NAME}" \

MAIL_DRIVER=mail \
MAIL_HOST=mail.gmail.com \
MAIL_PORT=587 \
MAIL_ENCRYPTION=tls \

Mail using mailtrap go to mailtrap.io and create account fetch user_name secret and password secret \
MAIL_MAILER=smtp \
MAIL_HOST=smtp.mailtrap.io \
MAIL_PORT=2525 \
MAIL_USERNAME=YourMailSecret \
MAIL_PASSWORD=YourPasswordSecret \
MAIL_ENCRYPTION=null \
MAIL_FROM_ADDRESS=ambuj@gmail.com \
MAIL_FROM_NAME="${APP_NAME}" \

----------------------------------------------------------------------------------------------------- \
