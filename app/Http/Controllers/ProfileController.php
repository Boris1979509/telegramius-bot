<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        return view('pages.profile', compact('currentStore'));
    }
}
