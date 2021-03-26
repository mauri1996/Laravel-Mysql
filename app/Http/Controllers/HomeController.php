<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Administra rutas
class HomeController extends Controller
{
    // funcion para q adminsitre 1 ruta espesifica
    public function __invoke()
    {
        //return "Bienvenido a la pagina principal";
        return view('home'); // se dirige a la carpeta resource/view
    }
}
