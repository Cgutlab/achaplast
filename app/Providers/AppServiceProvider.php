<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Dato;
use App\Logo;
use App\Red;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /* Schema::defaultStringLenght(191);*/
        $redes = Red::orderBy('orden','asc')->get();

        $direccion= Dato::where('tipo','direccion')->first();
        $telefono= Dato::where('tipo','telefono')->first();
        $correo= Dato::where('tipo','correo')->first();
        $fax= Dato::where('tipo','fax')->first();

        $header = Logo::where('tipo','header')->first();
        $footer = Logo::where('tipo','footer')->first();
        $fuuter = Logo::where('tipo','fuuter')->first();
        $favicon= Logo::where('tipo','favicon')->first();

        view()->share([
            'header' => $header, 
            'footer' => $footer, 
            'fuuter' => $fuuter, 
            'favicon' => $favicon, 
            'redes' => $redes,
            'direccion' => $direccion, 
            'telefono' => $telefono, 
            'correo' => $correo,
            'fax' => $fax]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
