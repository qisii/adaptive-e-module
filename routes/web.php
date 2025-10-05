<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/home', [HomePageController::class, 'home'])->name('home');
Route::get('/login', [HomePageController::class, 'login'])->name('login');
Route::get('/register', [HomePageController::class, 'register'])->name('register');

/*
    i need help in adding a value for the prefix and as attributes. I have 2 users: 
    Students and Teacher/Admin. I am working in /home that has 2 links: login and sign up.
*/
Route::group(['prefix' => '', 'as' => '.'], function(){
    
});