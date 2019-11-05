<?php

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

// Route::get('/users', function () {
//     return "Users!";
// });

Route::get('/hello-world/{year}/{name?}', function($year, $name = null){
    $hello = "";
    if(isset($name)) {
        $hello = "Hello world. My name is " . $name . " I start learning in " . $year;
    }else {
        $hello = "Hello world. I start learning in " . $year;
    }
    return view('hello-world')->with('hello_str', $hello); 
});

Route::get('/role', function() {
    echo "asddddaad";
})->middleware('checkage:20');

Route::resource('posts', 'PostController');
Route::resource('contacts', 'ContactController');
Route::get('/users', 'UserController@index');
Route::resource('todos', 'TodoController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
