<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        return view('pages.favorites', compact('currentStore'));
    }
}
