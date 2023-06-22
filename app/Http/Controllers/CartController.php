<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        $cart = $this->getCart();
        return view('pages.cart', compact('currentStore', 'cart'));
    }

    public function addItem(Request $request)
    {
        $this->cartService->addItem($request);
    }

    public function removeItem(Request $request)
    {
        $this->cartService->removeItem($request);
    }

    public function removeItemById(Request $request)
    {
        $this->cartService->removeItemById($request);
    }

    public function getCart()
    {
        $cartItems = $this->cartService->getItems();
        $productIds = array_column($cartItems, 'id');
        $products = Product::getProductsByIds($productIds);
        $totalPrice = 0;
        $formatedPrice = '';
        foreach ($products as $product) {
            foreach ($cartItems as $cartItem) {
                if ($cartItem['id'] == $product->id) {
                    $product->qty = $cartItem['qty'];
                    $totalPrice += (float) preg_replace('/[^0-9.,]/', '', $product->price) * $cartItem['qty'];
                    $formatedPrice = $product->getPriceAttribute($totalPrice);
                    break;
                }
            }
        }
        $totalQty = array_reduce($cartItems, function ($carry, $item) {
            return $carry + $item['qty'];
        }, 0);

        return [
            'products' => $products,
            'totalQty' => $totalQty,
            'totalPrice' => $formatedPrice ? $formatedPrice : 0,
        ];
    }
}
