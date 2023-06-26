<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calificacionesController extends Controller
{
    public function compararCalificaciones(Request $request){
        $validated = $request->validate([
            'alice' => 'required',
            'bob' => 'required',
        ]);

        $alicePoints = 0;
        $bobPoints = 0;

        $alice = array_map('intval', explode(' ', $request->alice));
        $bob = array_map('intval', explode(' ', $request->bob));

        if (count($alice) != 3 || count($bob) != 3) {
            return redirect('/')->with('statusDanger', 'Debe ingresar exactamente 3 calificaciones para cada persona.');
        }

        for ($i = 0; $i < 3; $i++) {
            if ($alice[$i] < 1 || $alice[$i] > 100 || $bob[$i] < 1 || $bob[$i] > 100) {
                return redirect('/')->with('statusDanger', 'Debe ingresar calificaciones en un rango de 1 al 100');

            }

            if ($alice[$i] > $bob[$i]) {
                $alicePoints++;
            } elseif ($alice[$i] < $bob[$i]) {
                $bobPoints++;
            }
        }

        $statusMessage = "Los puntajes son: [$alicePoints, $bobPoints]. ";
        $statusMessage .= "Alice: $alicePoints punto(s). ";
        $statusMessage .= "Bob: $bobPoints punto(s).";

        return redirect()->back()->with('status', $statusMessage);

    }
}
