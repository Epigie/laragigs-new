<?php

use App\Http\Controllers\ListingController;
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

// Create Listing Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);