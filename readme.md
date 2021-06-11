## Laravel Admin Panel (Current: Laravel 7.*)

[![StyleCI](https://styleci.io/repos/105789824/shield?style=plastic)](https://github.styleci.io/repos/105789824)
![GitHub contributors](https://img.shields.io/github/contributors/FTXInfotech/laravel-adminpanel.svg)
![GitHub stars](https://img.shields.io/github/stars/FTXInfotech/laravel-adminpanel.svg?style=social)

### Introduction
---
Laravel Admin Panel provides you with a massive head start on any size web application. It comes with a full featured access control system out of the box with an easy to learn API and is built on a Bootstrap foundation with a front and backend architecture. We have put a lot of work into it and we hope it serves you well and saves you time!

* The project is based on the [Rappasoft Laravel Boilerplate](https://github.com/rappasoft/laravel-boilerplate/releases/tag/v6.0.1), with enhancements and many modules pre-made, just for you.
* Article on our Admin Panel on CodeWall : [https://www.codewall.co.uk/the-laravel-admin-panel-that-you-need/](https://www.codewall.co.uk/the-laravel-admin-panel-that-you-need/)
* MIT: [http://anthony.mit-license.org](http://anthony.mit-license.org)

### Setup
---
Clone the repo and follow below steps.
1. Run `composer install`
2. Copy `.env.example` to `.env` Example for linux users : `cp .env.example .env`
3. Set valid database credentials of env variables `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`
4. Run `php artisan key:generate` to generate application key
5. Run `php artisan migrate`
6. Run `php artisan passport:install`
7. Run `php artisan db:seed` to seed your database
7. Run `npm i` (Recommended node version `>= V10.0`)
8. Run `npm run dev` or `npm run prod` as per your environment

Thats it... Run the command `php artisan serve` and cheers, you are good to go with your new **Laravel Admin Panel** application.
