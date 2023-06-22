<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends BaseController
{
  public function __invoke(Request $request)
  {
    $currentStore = $request->currentStore;
    return view('pages.order', compact('currentStore'));
  }
}
