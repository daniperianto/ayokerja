<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings
Route::get('/', [\App\Http\Controllers\ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [\App\Http\Controllers\ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit'])->middleware('auth');

// Edit Submit to Update
Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'delete'])->middleware('auth');

Route::get('/listings/manage', [\App\Http\Controllers\ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);


// Show Register/Create Form
Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);

// Log User Out
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');

// Log In User
Route::post('users/authenticate', [\App\Http\Controllers\UserController::class, 'authenticate'])->middleware('guest');

