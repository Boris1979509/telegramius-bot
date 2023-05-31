<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Services\SlugParserService;

Route::middleware(['store.settings', 'set.language'])->group(function () {
  Route::get('/', HomeController::class)->name('home');
  Route::get('/catalog', CatalogController::class)->name('catalog');
  Route::get('/catalog/{slug}', [CatalogController::class, 'category'])->name('category');
  Route::get('/favorites', FavoritesController::class)->name('favorites');
  Route::get('/cart', CartController::class)->name('cart');
  Route::get('/profile', ProfileController::class)->name('profile');
  Route::get('/product', ProductController::class)->name('product');
  Route::get('/product/{slug}', [ProductController::class, 'product'])->name('product');
});
// Create slug
Route::get('/parse-slug', function () {
  $tableName = 'category'; // product
  $fieldName = 'name'; // title

  try {
    $parser = new SlugParserService();
    $result = $parser->parse($tableName, $fieldName);
    return "Parsed $result records.";
  } catch (\Exception $e) {
    return "Error: " . $e->getMessage();
  }
});
