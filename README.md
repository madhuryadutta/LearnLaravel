<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax , MVC architecture , Blade template and Artisan CLi . Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Learning Laravel 

## How to Install
Before creating your first Laravel project, you should ensure that your local machine has PHP and Composer installed. 
  install Lamp server
  install composer
  install laravel globally
https://laravel.com/docs/10.x/installation

## Create Project
composer create-project laravel/laravel example-app
            OR
composer global require laravel/installer
 
laravel new example-app    

## change directory to project folder
    Syntax- cd <project name>  
    eg, 
    cd example-app
## commands for start:
php artisan serve

## Laravel Directory Structure

app/console/kernal.php - for custom artisan command
app/exceptions/handler.php - for custom handler
app/http/controllers/controllers.php - controller for Api , website etc
app/http/Middleware - access guard for routes
app/http/model-  models for every database table 
app/http/providers- for external/ third party plugins and files
bootstrap- for improve application performence /speed
config- store all confifuration files for the application
database/migration - for creatating new databse table using laravel
database/factories - generates fake data for testing purposes
public - run the app 
routes - web.php for website routes and api.php for api routes configs 
resources- frontend pages , css , js etc
storage - location for stores files by the application users
test/unit- for writing unit testing test cases
vendor- for external packages
.env file - for configuartion test and production configuration details
composer.json - store all dependencies information for automatic updates
pakage system - for sending mails and import excel and files data


## route methods
get - for view (hit url)
post - store data

## route for webpages in Route/web.php Syntax 
Route::<Method name>('path with respect to root', function(){
    function code
});

eg;
Route::post('/2', function(){
    echo "Fail";
});

## Routing of webpage with data
Route::get('/beta/{name}/{id}',function($name,$id=null){
      $data = compact('name','id');
      return view('demo')->with($data);
});

in demo page;
enter {{name}} and {{id}} for displaying the data


## Resource/view 
for front end files.Blade is a template engine engine of Laravel. code for return a page (demo.blade.php) in custom route (/alpha) is written bellow-

eg; 
Route::get('/alpha',function(){
    return view('demo');

## API route in Route/api.php syntax
Route::<Method name>('path with respect to root', function(){
    function code
});
API url-> 127.0.0.1:8000/api/<API name>

eg;
route::get('/get-data',function(){
    return "Success";
});

API will be available in this url 127.0.0.1:8000/api/get-data

## {{}} - for echo in blade

## other conditional in laravel blade-  @if() @else @elseif @endif @unless @endunless

## @isset 
## @for @while
## @php
## @break @continue

## @include
@include('layouts.header')
@include('layouts.footer')

## @yeild -- display the content of a given section
@yield('main-section')

## create new file in view - @extends inherit the layout of the main.blade.php
@extends('layouts.main')
@push('title')
<title>Test1</title>
@section('main-section')
<h1 class="text-center">
Home Page
</h1>
@endsection


## @stack - use for specific input in title tag
    @stack('title') // in header.php
    @push('title')
<title>Home</title>
//in the specific page




## Basic controller: location app/htttp
php artisan make:controller <cotroller name>

eg;
php artisan make:controller DemoController

## Single Action controller: location app/htttp
php artisan make:controller <cotroller name>

eg;
php artisan make:controller SingleActionController --invokeable


## resource controller: location app/htttp
php artisan make:controller PhotoController --resource



## migration commands
php artisan make:migration create_table_name_table
php artisan migrate
php artisan migrate --force
php artisan migrate:rollback
php artisan migrate:refresh

## add attributes to a table
php artisan make:migration add_columns_to_customers_table


## model creation
php artisan make:model <model_name>

php artisan make:model <model_name> --migration


