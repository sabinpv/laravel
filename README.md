## About My Laravel Project

## Installed laravel project 8x using composer
composer create-project laravel/laravel Myproject

## Updated env file with mysql credentials

use **php artisan serve** to run the application

## Created migration file for user,designation and department with data
php artisan make:migration create_user_table

## Executed 'php artisan migrate:fresh'  to migrate DB into mysql server

## Added api routes for get all employess in routes > api.php

## Created new controller for functioning the api route in app > Http > Controllers > EmployeeController 
php artisan make:controller EmployeeController

## Tested API using postman

## Created a function show and it will return a view on resources > views > emp > Emp_Details.blade.php

## On Emp_Details.blade.php created UI for listing employess with html css and bootstarp and jquery

 Executed **php artisan:optimize** to clear all cache

 ## To run my project.

 use  **http://127.0.0.1:8000/api/employees**