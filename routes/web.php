<?php

use Illuminate\Support\Facades\Route;

use App\Models\ListingBorrow;
use App\Models\User;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home', ['supplies' => ListingBorrow::all()]);
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware((['auth']));

Route::get('/about', function() {
    return view('about');
});

// Listings
Route::get('/listing/borrow/{id}', function($id) {
    $listing = ListingBorrow::find($id);
    return view('/listing/borrow', ['listing' => $listing]);
});
// Register
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
// Login
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
// Logout
Route::post('/logout', [SessionController::class, 'destroy']);