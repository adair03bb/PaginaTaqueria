<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenControlador extends Controller
{
    public function crear()
    {
        // Simplemente devuelve la vista del formulario
        return view('mesas.agregarOrden');
    }

    public function guardar(Request $request)
    {
        // Aquí procesarías los datos enviados desde el formulario
        // Por ahora, solo vamos a redirigir de vuelta al formulario
        return back()->with('success', 'Orden agregada con éxito (simulado).');
    }
}
