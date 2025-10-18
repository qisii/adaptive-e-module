<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Login with Google

Route::get('/auth/google', [SocialiteController::class, 'googleLogin'])->name('auth.google');
Route::get('/auth/google-callback', [SocialiteController::class, 'googleAuthentication'])->name('auth.google-callback');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show'); // add {id}
    // Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/avatar/destroy', [ProfileController::class, 'destroyAvatar'])->name('profile.avatar.destroy'); // to be continued

    # ADMIN
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
        // Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile/avatar/destroy', [ProfileController::class, 'destroyAvatar'])->name('profile.avatar.destroy'); // to be continued
    });
});

require __DIR__.'/auth.php';
