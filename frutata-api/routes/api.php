<?php

use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
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


Route::resource('products', ProductController::class);
Route::resource('product-categories', ProductCategoryController::class);
Route::resource('partners', PartnerController::class);
