<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ShopSetting;
use App\Helpers\SubdomainExtractor;

class StoreSettingsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$url = $request->getHost();
        //$subdomain = SubdomainExtractor::extract($url);
        $store = ShopSetting::where('domain', 'test')->first();

        // Передаем текущий магазин в объект Request
        $request->merge(['currentStore' => $store]);
        return $next($request);
    }
}
