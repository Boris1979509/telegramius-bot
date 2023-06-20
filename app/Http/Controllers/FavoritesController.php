<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FavoritesController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        $favorites = $this->getFavorites();
        return view('pages.favorites', compact('currentStore', 'favorites'));
    }

    private function getFavorites()
    {
        $favoritesIds = $this->getFavoritesIds();
        return Product::whereIn('id', $favoritesIds)->get();
    }

    private function getFavoritesIds()
    {
        return session()->get('favorites', []);
    }

    public function toggle(Request $request)
    {
        $productId = $request->input('productId');

        // Получаем текущий список избранных товаров из сессии
        $favorites = $this->getFavoritesIds();

        // Проверяем, есть ли товар в списке избранных
        $index = array_search($productId, $favorites);
        if ($index !== false) {
            // Если товар уже есть в списке, удаляем его
            unset($favorites[$index]);
            session()->put('favorites', $favorites);
            return response()->json(['success' => true, 'message' => 'The product was removed from favorites.']);
        } else {
            // Если товара нет в списке, добавляем его
            $favorites[] = $productId;
            session()->put('favorites', $favorites);
            return response()->json(['success' => true, 'message' => 'Product added to favorites.']);
        }
    }
}
