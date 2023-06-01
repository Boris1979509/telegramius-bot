<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends BaseController
{
    public function __invoke(Request $request, $slug)
    {
        $currentStore = $request->currentStore;

        $product = Product::where('slug', $slug)
            ->with(['images' => function ($query) {
                $query->orderBy('rank');
            }])
            ->first();

        if ($product->arr_related) {
            $related = explode(',', $product->arr_related);
            $related_products = Product::whereIn('id', $related)->get();
            $product->related_products = $related_products;
        }

        return view('pages.product', compact('currentStore', 'product'));
    }
}
