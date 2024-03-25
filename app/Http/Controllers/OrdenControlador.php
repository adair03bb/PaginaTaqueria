<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenTaco;
use App\Models\Productos;

class OrdenControlador extends Controller
{
    public function crear()
    {
        $productos = Productos::all();
        return view('mesas.agregarOrden', compact('productos'));
    }

    public function guardar(Request $request)
    {
        $orden = new OrdenTaco();
        $orden->nombre_cliente = $request->nombre_cliente;
        
        // Iterar sobre los productos y guardar la cantidad y el descuento en la orden
        foreach ($request->productos as $id => $cantidad) {
            $orden->productos()->attach($id, [
                'cantidad' => $cantidad,
                'descuento' => $request->input('descuento_' . $id),
            ]);
        }

        try {
            $orden->save();
        } catch (\Exception $e) {
            dd($e);
        }

        return back()->with('success', 'Orden agregada con éxito.');
    }
}
