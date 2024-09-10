<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('midd');
        // dd(session()->get('locale1'), session('locale'), Session::get('locale1'));
        // App::setLocale('bn');
        if (session()->has('locale')) {
            // App::setLocale('bn');
            App::setLocale(session()->get('locale'));
        }

        return $next($request);

        //  // Check if the first segment of the URL is a valid locale
        //  $locale = $request->segment(1);
        // // dd('locale', $locale);
        //  // Validate if the locale exists in the supported locales
        //  if (in_array($locale, Config::get('app.supported_locales'))) {
        //      App::setLocale($locale);
        //      Session::put('locale', $locale);
        //  } else {
        //      // If no valid locale is found, set the default locale
        //      $locale = Session::get('locale', Config::get('app.fallback_locale'));
        //      return redirect($locale . '/' . $request->path());
        //  }

        //  return $next($request);
    }
}
