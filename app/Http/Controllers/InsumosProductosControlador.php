<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use App\Models\Categoria;
use App\Models\Productos;
use Illuminate\Http\Request;
use App\Models\UnidadMedidas;
use App\Models\InsumosProductos;

class InsumosProductosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumosProductos = InsumosProductos::with(['producto:id,nombre', 'insumo:id,nombre', 'unidadMedida:id,nombre', 'categoria:id,nombre'])->get();
        $insumos = Insumos::all();
        $productos = Productos::all();
        $unidadMedida = UnidadMedidas::all();
        $categorias = Categoria::all();
        return view('insumosproductos.index', compact('insumosProductos', 'insumos', 'productos','unidadMedida', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $ID_Producto = $request->input('ID_Producto');
            $ID_Insumos = $request->input('ID_Insumo');
            $cantidades = $request->input('cantidades');
    
            // Obtener la categoría asociada al producto
            $producto = Productos::find($ID_Producto);
    
            if (!$producto) {
                throw new \Exception("No se encontró el producto con ID $ID_Producto.");
            }
    
            $ID_Categoria = $producto->ID_Categoria;
    
            // Crear un array para almacenar los IDs de los insumos
            $insumos = [];
    
            foreach ($ID_Insumos as $ID_Insumo) {
                $insumo = Insumos::find($ID_Insumo);
    
                if (!$insumo) {
                    throw new \Exception("No se encontró el insumo con ID $ID_Insumo.");
                }
    
                $insumos[] = $ID_Insumo;
    
                $insumosProductos = new InsumosProductos;
                $insumosProductos->cantidad = $cantidades[$ID_Insumo];
                $insumosProductos->ID_Insumo = $ID_Insumo;
                $insumosProductos->ID_Producto = $ID_Producto;
                $insumosProductos->ID_Categoria = $ID_Categoria;
    
                // Utilizar la relación para obtener la unidad de medida del insumo correspondiente
                $unidadMedida = $insumo->unidadMedida;
    
                if (!$unidadMedida) {
                    throw new \Exception("No se pudo obtener la unidad de medida para el insumo con ID $ID_Insumo.");
                }
    
                $insumosProductos->ID_UnidadMedida = $unidadMedida->id;
    
                $insumosProductos->insumos = implode(',', $insumos); // Convertir el array de IDs de insumos a una cadena separada por comas
                $insumosProductos->save();
            }
    
            return redirect()->back()->with('success', 'Insumos asociados correctamente.');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(InsumosProductos $insumosProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $insumosProductos=InsumosProductos::find($id);
        $insumosProductos->cantidad=$request->input('cantidad');
        $insumosProductos->ID_Insumo=$request->input('ID_Insumo');
        $insumosProductos->ID_Producto=$request->input('ID_Producto');
        $insumosProductos->ID_UnidadMedida=$request->input('ID_UnidadMedida');
        $insumosProductos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $insumosProductos=InsumosProductos::find($id);
        $insumosProductos->delete();
        return redirect()->back();

    }
}
