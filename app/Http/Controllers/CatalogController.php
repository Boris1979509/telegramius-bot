<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        return view('pages.catalog', compact('currentStore'));
    }
}
