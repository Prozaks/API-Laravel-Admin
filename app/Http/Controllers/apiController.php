<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function get($origenLat, $origenLong, $destinoLat, $destinoLong, $hora, $fecha)
    {
    	$salida = shell_exec('python2.7 script.py '.$origenLat.' '.$origenLong.' '.$destinoLat.' '.$destinoLong.' '.$hora.' '.$fecha);
    	return $salida;
    }
}

//Se debe añadir la ruta del script.py.