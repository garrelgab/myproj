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
Route::get('/home', 'HomeController@index')->name('home');



Route::view('/', '/authe/mind/login');
Route::view('/new-register', 'authe.register');

// Example Routes
// Route::view('/', '/authe/login');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});


// Route::view('/pages/slick', 'pages.slick'); 
// Route::view('/pages/datatables', 'pages.datatables');
// Route::view('/pages/blank', 'pages.blank');

// Route::view('/authe/register', 'authe/register');

 Auth::routes();



// Route::get('/register', function () {
//     return view('authe/register');
// });