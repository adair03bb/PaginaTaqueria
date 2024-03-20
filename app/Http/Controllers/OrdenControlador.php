<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenTaco;

class OrdenControlador extends Controller
{
    public function crear()
    {
        // Simplemente devuelve la vista del formulario
        return view('mesas.agregarOrden');
    }

    public function guardar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'tacos' => 'required|array',
            'tacos.*' => 'integer|min:0',
        ]);
    
        // Crear una nueva instancia del modelo Orden
        $orden = new OrdenTaco();
        $orden->nombre_cliente = $request->nombre_cliente;
        $orden->al_pastor = $request->tacos['al_pastor'] ?? 0;
        $orden->de_carnitas = $request->tacos['de_carnitas'] ?? 0;
        $orden->de_bistec = $request->tacos['de_bistec'] ?? 0;
        $orden->de_barbacoa = $request->tacos['de_barbacoa'] ?? 0;
    
        // Guardar la orden en la base de datos
        $orden->save();
    
        // Redirigir de vuelta al formulario con un mensaje de éxito
        return back()->with('success', 'Orden agregada con éxito.');
    }
    
}
