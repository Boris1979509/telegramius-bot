<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ComplaintController;
use App\Http\Controllers\FavoritesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/categories-search', [CategoryController::class, 'search']);
Route::post('/products-search', [ProductController::class, 'search']);
Route::post('/create-buyer-complaint', [ComplaintController::class, 'create']);
