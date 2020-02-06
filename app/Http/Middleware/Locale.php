<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    protected $languages = ['en','es','it','pt'];

    public function handle($request, Closure $next)
    {
        if(!session()->has('locale'))
        {
          session()->put('locale', $request->getPreferredLanguage($this->languages));
        }

        app()->setLocale(session('locale'));

        return $next($request);
    }
}
