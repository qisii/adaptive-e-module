<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
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
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function(){
    Route::get('/show', [ProfileController::class, 'show'])->name('profile.show'); // add {id}
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'module', 'as' => 'module.'], function(){
    
});

Route::group(['prefix' => 'grade', 'as' => 'grade.'], function(){
    
});

Route::group(['prefix' => 'feedback', 'as' => 'feedback.'], function(){
    
});