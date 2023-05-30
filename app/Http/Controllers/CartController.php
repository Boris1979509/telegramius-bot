<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        return view('pages.cart', compact('currentStore'));
    }
}
