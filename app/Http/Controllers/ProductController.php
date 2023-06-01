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

        return view('pages.product', compact('currentStore', 'product'));
    }
}
