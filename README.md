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
 [Official Documentation](https://laravel.com/docs/10.x/)
## How to Install
Before creating your first Laravel project, you should ensure that your local machine has PHP and Composer installed. 
 - Install Lamp server
 - Install composer
 - Install laravel globally

## Create Project -  There are Two ways to create a project 
    composer create-project laravel/laravel <project name>
    eg,
    composer create-project laravel/laravel example-app
   
            OR

    
    composer global require laravel/installer
    laravel new <project name>  
    eg, 
    composer global require laravel/installer
    laravel new example-app  

## change directory to project folder
    cd <project name>  
    eg, 
    cd example-app

## commands for start:
     php artisan serve


## Laravel Directory Structure
    app/Console/kernal.php -- for hold custom artisan command
    app/Exceptions/handler.php -- for hold custom handler (exception)
    app/Http/Controllers/ -- Base Controller, API controller  , website Controller etc
    app/Http/Middleware -- access guard for routes of the website
    app/Http/model -- models for all database table 
    app/Http/providers -- for external/ third party Service provider files
    bootstrap -- for improve application performence (speed up) using cache
    config -- store all confifuration files for the application (mail , auth , hash)
    database/migration -- for creating new database table using laravel
    database/factories & seeders -- generates fake data for testing purposes
    public -- run the app using the index.php
    routes -- web.php for website routes and api.php for api routes configs 
    resources -- frontend pages , css , js etc
    storage -- location for stores files by users (eg , downloadable file)
    test/unit -- for writing automation (unit) testing test cases
    vendor -- for external packages (eg payment gateway , google login)
    .env file -- for configuartion test and production configuration details
    composer.json -- store all dependencies(packages) information 
    readme.md -- file for documentation 
    pakage system -- for sending mails and import excel and files data

## Route in Laravel
### route methods (get,post,put,patch,delete)
    get -- for view (hit url)
    post -- store data
    resource -- This method is for the routes of resource controller predefine functions

### Route for webpages in Route/web.php Syntax 

    Route::<Method name>('path with respect to root', function(){
        function code
    });
    eg;
    Route::post('/2', function(){
        echo "Fail";
    });

### Routing of webpage with data
    Route::get('/beta/{name}/{id}',function($name,$id=null){
        $data = compact('name','id');
        return view('demo')->with($data);
    });

    in demo page;
    enter {{name}} and {{id}} for displaying the data
### Routing for Controllers  : use 'resource' as method for the resource controllers
    Syntax -- Route::<Method name>('path with respect to root', [<ControllerName>::class,'<classname>']);
    Route::get('/page7',[DemoController::class,'about']);

## Resource/view 
##### for front end files '.blade' is a template engine engine of Laravel. code for return a page (demo.blade.php) in custom route (/page1) is written bellow.
    eg; 
    Route::get('/page1',function(){
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

## Blade Template
##### Blade is a template engine of Laravel . Its file extension is "filename.blade.php"
    {{$variable_name}} -- for simple echo without html decode in blade 
    {{!!$variable_name!!}} -- for echo with html decode in blade
    {{date(d-m-y)}} -- for echo date in blade
    @if() @else @elseif -- for writing conditional in blade
    @isset -- check weather the varible set
    @unless -- unless the the condition is true ,do nothing
    @for -- for loop
    @while -- while loop
    @php -- syntax for writing raw php 
    @continue -- for skip the current iteration and run the next  
    @break --  it will stop the loop
    {{-- comment --}} -- syntax for write a comment

### Blade Layout Directives
    @include - for adding/include an another php file 
    @section -- it defines the section of a content which will be yeild
    @yeild -- display the content of a given section
    @extends -- it ineherit/take the layout the parameter file

    eg, lets create a layouts folder with 3 files (footer,main,header) inside resources/views

    main file code:
            @include('layouts.header')
            @yield('main-section')
            @include('layouts.footer')
    
    now use extends for including the main layout:
             @extends('layouts.main')
    
    the following datawill be merge with the view of the current page:
            @section('main-section)
            <data to be included>
            @endsection

    for dynamic title tages we can use @stack in header and @push in the current webpage
            @stack('title')  --  [in header.blade.php]
            @push('title') <title> add the title here </title> @endpush  --  [we can also add meta tags] 


## Controllers in Laravel ( PATH: app/Http/Controllers/)
This are Class based php files.It works as a interpreter between view and model.  we can group related request handling logic in controllers.
   
### Basic controller: (a default single class included)
    php artisan make:controller <cotroller name>

    eg;
    php artisan make:controller DemoController

### Single Action controller: (for handling single request)
    php artisan make:controller <cotroller name>

    eg;
    php artisan make:controller SingleActionController --invokable


### resource controller: (predefine CRUD operation functions are included which can't be renamed )
    php artisan make:controller PhotoController --resource

## Components In laravel (Paths: app/View/Components & resources/views/components)
    syntax -- php artisan make:component <Component_name>
    php artisan make:component Input

    use  <x-input/> tag for render the component in the view pages



## Migration commands
    php artisan config:cache (for first time env file setup)

    php artisan migrate (for first time migration to create default tables)

    php artisan make:migration create_table_name_table (for creating new table)

    php artisan migrate --force

    php artisan migrate:rollback (for undo the last migration)
    
    php artisan migrate:refresh (for fresh run all migration)


### add attributes (new columns) to a table
    syntax  --  php artisan make:migration add_columns_to_<tablename>_table
    php artisan make:migration add_columns_to_customers_table

## Model in Laravel ( PATH: app/Models/)
This are Class based php files. Laravel include Eloquent ,an ORM to interact with database.Each table has a coresponding table to interact with the table

### Model creation Commands
    syntax  --  php artisan make:model <model_name singular form>
    eg,
    php artisan make:model <model_name> --migration

    syntax -- php artisan make:model <model_name in singular form> --migration
    eg,
    php artisan make:model Product --migration

## Custom Helper: for minimize task
    create "helper.php" inside "app" folder 
    create functions which are cooomnonly use in development or production , so that you can call them anytime 
    add "files": ["app/helper.php"] to "composer.json"
    composer dump-autoload

## Accessor & Mutator : for modify data which are going to /from the database
### Mutator Syntax   
    public function Set<field_name(in camelcase)>Attribute($value)
    {
        $this->attributes['<field_name(same as on the database )>']=ucwords($value);
    }

####    eg, following function convert the cutomer_name filed from the customers table, as first character of each word to uppercase:

    public function setCustomerNameAttribute($value)
    {
    $this->attributes['customer_name'] = ucwords($value);
    }
### Accessor syntax/example
     public function getCustomerDobAttribute($value){
        return date("d-M-Y",strtotime($value));
    }

## Seeder & Faker in Laravel
    php artisan make:seeder CustomerSeeder
    configure the "CustomerSeeder" file with rules 
    php artisan db:seed 
    use for loop for large number of entries