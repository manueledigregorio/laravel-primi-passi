<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $message = 'hello word';
    return view('home' ,compact('message'));
});

Route::get('/about', function () {
    $message_two = 'hello about';
    return view('about' ,compact('message_two'));
});
