<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\SearchProductResource;
use App\Models\Product;

class ProductController extends BaseController
{
    public function search(Request $request)
    {
        $currentStore = $request->currentStore;
        $products = Product::where('tele_shop_id', $currentStore->tele_shop_id)
            ->where('title', 'like', '%' . $request->search . '%')
            ->orderBy('index')
            ->with('category')
            ->limit(5)
            ->get();
        return SearchProductResource::collection($products)
            ->additional([
                'numProductsInRow' => $currentStore->numProductsInRow
            ]);
    }
}
