<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Location routes (Country, Region and City)
Route::resource('countries',CountryController::class)->only('index');
Route::resource('regions',RegionController::class)->only('index');
Route::resource('cities',CityController::class)->only('index');
// Businesses route
Route::resource('businesses', BusinessController::class)->except(['create','edit']);
