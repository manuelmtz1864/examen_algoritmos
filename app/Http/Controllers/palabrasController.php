<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class palabrasController extends Controller
{
    public function indexPalabras(){

        return view('palabras');
    }

    public function procesarPalabras(Request $request ){

        $texto = $request->palabrasText;
        $texto = strtolower($texto);

        $palabras = explode(' ', $texto);

        $contador = array_count_values($palabras);

        return response()->json($contador);
    }
}
