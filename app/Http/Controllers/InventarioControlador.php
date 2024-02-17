<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Models\InsumosCompras;

class InventarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventario=Inventario::all();
        $insumosCompras=InsumosCompras::all();
        return view('inventario.index',compact('inventario','insumosCompras'));
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
        $inventario=new Inventario;
        $inventario->fechaCaducidad=$request->input('fechaCaducidad');
        $inventario->ID_InsumoCompra=$request->input('ID_InsumoCompra');
        $inventario->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
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
        $inventario= Inventario::find($id);
        $inventario->fechaCaducidad=$request->input('fechaCaducidad');
        $inventario->ID_InsumoCompra=$request->input('ID_InsumoCompra');
        $inventario->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inventario= Inventario::find($id);
        $inventario->delete();
        return redirect()->back();
    }
}
