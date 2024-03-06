<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class MostrarInsumosControlador extends Controller
{
    public function mostrarInsumos($productoId)
    {
        $producto = Productos::with('insumosProductos.insumo', 'insumosProductos.unidadMedida')
            ->find($productoId);

        $insumosProductos = $producto->insumosProductos;

        return view('productos.mostrarInsumos', compact('insumosProductos'));
    }

   
}
