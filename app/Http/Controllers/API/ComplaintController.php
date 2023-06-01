<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComplaintController extends BaseController
{
    public function create(Request $request)
    {
        try {
            $currentStore = $request->currentStore;
        } catch (\Exception $e) {
            Log::error('Ошибка:' . $e->getLine() . ' : ' . $e->getMessage() . ' : ' . $e->getFile());
        }
    }
}
