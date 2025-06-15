<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check URL parameter first (for API calls or direct links)
        if ($request->has('lang')) {
            $locale = $request->query('lang');
            if (in_array($locale, ['en', 'mn'])) {
                app()->setLocale($locale);
                return $next($request);
            }
        }

        // Check cookie
        if ($locale = $request->cookie('locale')) {
            app()->setLocale($locale);
        }
        // Check session
        elseif ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        // Check browser preference
        elseif ($locale = $request->getPreferredLanguage(['mn', 'en'])) {
            app()->setLocale($locale);
        }
        // Default to Mongolian
        else {
            app()->setLocale('mn');
        }

        return $next($request);
    }
}
