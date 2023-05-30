<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $acceptLanguage = $request->header('Accept-Language');
        $preferredLanguage = Str::before($acceptLanguage, ',');

        // Удалите пробелы и установите язык по умолчанию, если $preferredLanguage пустой
        $preferredLanguage = $preferredLanguage ? Str::replace(' ', '', $preferredLanguage) : 'en';

        // Установите предпочитаемый язык в приложении Laravel
        App::setLocale($preferredLanguage);

        return $next($request);
    }
}
