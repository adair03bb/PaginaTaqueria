<?php

namespace App\Http\Controllers;

use App\Models\InsumosProductos;
use App\Models\Insumos;
use App\Models\Productos;
use Illuminate\Http\Request;

class InsumosProductosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumosProductos=InsumosProductos::all();
        $insumos=Insumos::all();
        $productos=Productos::all();
        return view('insumosproductos.index',compact('insumosProductos','insumos','productos'));
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
        $insumosProductos=new InsumosProductos;
        $insumosProductos->cantidad=$request->input('cantidad');
        $insumosProductos->ID_Insumo=$request->input('ID_Insumo');
        $insumosProductos->ID_Producto=$request->input('ID_Producto');
        $insumosProductos->save();
        return redirect()->back();
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
