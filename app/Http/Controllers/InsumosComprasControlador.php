<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use Illuminate\Http\Request;
use App\Models\UnidadMedidas;
use App\Models\InsumosCompras;

class InsumosComprasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumosCompras=InsumosCompras::all();
        $insumos=Insumos::all();
        $unidadMedidas=UnidadMedidas::all();
        return view('insumoscompras.index',compact('insumosCompras','insumos','unidadMedidas'));
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
        $insumosCompras=new InsumosCompras;
        $insumosCompras->cantidad=$request->input('cantidad');
        $insumosCompras->costo=$request->input('costo');
        $insumosCompras->ID_Insumo=$request->input('ID_Insumo');
        $insumosCompras->ID_UnidadMedida=$request->input('ID_UnidadMedida');
        $insumosCompras->fecha=$request->input('fecha');
        $insumosCompras->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(InsumosCompras $insumosCompras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $insumosCompras=InsumosCompras::find($id);
        $insumosCompras->cantidad=$request->input('cantidad');
        $insumosCompras->costo=$request->input('costo');
        $insumosCompras->ID_Insumo=$request->input('ID_Insumo');
        $insumosCompras->ID_UnidadMedida=$request->input('ID_UnidadMedida');
        $insumosCompras->fecha=$request->input('fecha');
        $insumosCompras->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $insumosCompras=InsumosCompras::find($id);
        $insumosCompras->delete();
        return redirect()->back();
    }
}
