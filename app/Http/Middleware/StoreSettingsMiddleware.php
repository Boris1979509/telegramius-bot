<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ShopSetting;
use App\Helpers\SubdomainExtractor;
use App\Services\ShopService;
use App\Models\Address;

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

        // время работы магазина
        $data = $this->getWorkTime($store);

        if ($data['status']) {
            if (!$data['open']) {
                $store->startWork = $data['start_work'];
            }
        }
        /** */

        // Передаем текущий магазин в объект Request
        $request->merge(['currentStore' => $store]);

        return $next($request);
    }

    private function getWorkTime($store)
    {
        $addresses = Address::where('tele_shop_id', $store->tele_shop_id)->get();
        if ($addresses->first()) {
            $isCanWork = (new ShopService)->openOrCloseShop($addresses);
            if ($isCanWork !== true) {
                return [
                    'status' => true,
                    'open' => false,
                    'start_work' => $isCanWork
                ];
            } else {
                return
                    [
                        'status' => true,
                        'open' => true
                    ];
            }
        } else {
            return ['status' => false];
        }
    }
}
