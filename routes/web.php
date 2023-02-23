<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo',function(){
    echo "Hello World" ;
});
Route::post('/test',function(){
    echo "Testing the Post Route";
});

Route::any('/any',function(){
    echo "This route support both GET & Post Method";
});

Route::get('/page1',function(){
    return view('demo');
});

Route::get('page2/{name}/{id?}',function($name , $id=null){
    $data = compact('name' , 'id');
//    print_r($data);
    return view('demowithdata')->with($data);
}); 




// More routing Methods

// Route::put('/put',function(){
//     echo "Testing the put Route";
// });
// Route::patch('/patch',function(){
//     echo "Testing the patch Route";
// });
// Route::delete('/delete',function(){
//     echo "Testing the delete Route";
// });

// More routing Methods



