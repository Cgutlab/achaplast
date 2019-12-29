<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class Idioma
{
    public function handle($request, Closure $next)
    {
        $idioma = "en";
        $idioma = "br";

        if($request->session()->has('idioma')) {
            $idioma = $request->session()->get('idioma');
        }else{
            $idioma = 'es';
        }

        App::setLocale($idioma);

        view()->share('idioma', $idioma);

        return $next($request);
    }
}
