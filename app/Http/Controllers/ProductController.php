<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        return view('pages.product', compact('currentStore'));
    }
}
