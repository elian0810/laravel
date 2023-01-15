<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * pasamos nuestras rutas para que no nos pidan el token de verificacion
     *
     * @var array<int, string>
     */
    protected $except = [
        "/appoiment",
        "/appoiment/create/"

        //
    ];
}
