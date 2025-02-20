<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Login;
use App\Livewire\Users\Show;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('/timeline', \App\Livewire\Timeline::class)->name('timeline');
    Route::get('users', \App\Livewire\Users\Index::class)->name('users');
    Route::get('/user/{user}', \App\Livewire\Users\Show::class)->name('user');
});

Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::post('/logout', LogoutController::class)->name('logout');
