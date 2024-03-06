<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use App\Models\Categoria;
use App\Models\Productos;
use Illuminate\Http\Request;
use App\Models\UnidadMedidas;
use App\Models\InsumosProductos;
use Illuminate\Support\Facades\DB;

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
    public function create($id)
    {
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $ID_Producto = $request->input('ID_Producto');
    $ID_Categoria = $request->input('ID_Categoria');
    $ID_Insumos = $request->input('ID_Insumo');
    $cantidades = $request->input('cantidades');
    $ID_UnidadMedida = $request->input('ID_UnidadMedida');

    foreach ($ID_Insumos as $index => $ID_Insumo) {
        // Verificar si el índice existe en el array cantidades
        if (isset($cantidades[$index])) {
            // Crear una nueva instancia de InsumosProductos para cada insumo
            $insumosProductos = new InsumosProductos;
            $insumosProductos->cantidad = $cantidades[$index];
            $insumosProductos->ID_Insumo = $ID_Insumo;
            $insumosProductos->ID_Producto = $ID_Producto;
            $insumosProductos->ID_Categoria = $ID_Categoria;

            // Verificar si el índice existe en el array ID_UnidadMedida
            if (isset($ID_UnidadMedida[$index])) {
                $insumosProductos->ID_UnidadMedida = $ID_UnidadMedida[$index];
            } else {
                // Puedes asignar un valor por defecto o lanzar una excepción según tu lógica
                $insumosProductos->ID_UnidadMedida = 1; // Por ejemplo, asignar un valor por defecto (ajusta según tus necesidades)
            }

            // Guardar cada instancia por separado
            $insumosProductos->save();
        }
    }

    $request->session()->flash('success', 'Insumos agregados correctamente');
    return redirect()->back();

    }


    public function editarInsumos(Request $request, $id)
{
    // Validaciones de formulario
    $request->validate([
        'cantidades.*' => 'numeric|nullable',
        'insumos.*' => 'exists:insumos,id',
        'unidadesMedida.*' => 'exists:unidadmedidas,id', // Nueva validación para las unidades de medida
    ]);

    try {
        // Obtén el producto con sus insumos asociados
        $producto = Productos::with('insumosProductos.unidadMedida')->find($id);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        // Itera sobre los insumos actuales y actualiza las cantidades, insumos y unidades de medida
        foreach ($producto->insumosProductos as $insumoProducto) {
            $insumoProducto->cantidad = $request->input('cantidades.' . $insumoProducto->id);
            $insumoProducto->ID_Insumo = $request->input('insumos.' . $insumoProducto->id);
            $insumoProducto->ID_UnidadMedida = $request->input('unidadesMedida.' . $insumoProducto->id);
            $insumoProducto->save();
        }

        return redirect()->back()->with('success', 'Insumos actualizados correctamente');
    } catch (\Exception $e) {
        // Manejar cualquier excepción que pueda ocurrir durante la actualización
        return redirect()->back()->with('error', 'Error al actualizar los insumos: ' . $e->getMessage());
    }
}


public function mostrarVistaEditarInsumos($id)
{
    $producto = Productos::with('insumosProductos.insumo')->find($id);
    $insumos = Insumos::all();

    return view('editarInsumos', compact('producto', 'insumos'));
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
