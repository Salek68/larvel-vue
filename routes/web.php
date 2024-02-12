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
    // return view('welcome');
    return view('index');
});
Route::get('/about', function () {
    // return view('welcome');
    return view('about');
});
Route::get('/contact', function () {
    // return view('welcome');
    return view('contact');
});
Route::get('/test', function () {
    // return view('welcome');
    $name1 = $_GET['name1'];
    return view('test',['name1'=> $name1]);
});

