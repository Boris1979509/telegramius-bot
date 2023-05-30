<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function search(Request $request)
    {
        $currentStore = $request->currentStore;
        $categories = Category::where('tele_shop_id', $currentStore->tele_shop_id)
            ->where('name', 'like', '%' . $request->search . '%')
            ->orderBy('index')
            ->limit(10)
            ->get();
        return CategoryResource::collection($categories)
            ->additional([
                'numCategoriesInRow' => $currentStore->numCategoriesInRow
            ]);
    }
}
