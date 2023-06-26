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

        // Convertir el texto a minúsculas
        $texto = strtolower($texto);

        // Eliminar los signos de puntuación
        //$texto = preg_replace('/[^\w\s]/', '', $texto);

        // Dividir el texto en palabras
        $palabras = explode(' ', $texto);

        // Contar las repeticiones de cada palabra
        $contador = array_count_values($palabras);

        // Devolver el resultado en formato JSON
        return response()->json($contador);
    }
}
