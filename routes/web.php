<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// ALl Listings
Route::get('/', [ListingController::class, 'index']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Create Listing Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);
// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// USER ROUTES
// Show Register/Create Form
Route::get('/register', [UserController::class, 'register']);