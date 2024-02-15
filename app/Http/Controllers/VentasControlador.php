<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas=Ventas::all();
        return view('ventas.index',compact('ventas'));
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
        $ventas=new Ventas;
        $ventas->fecha=$request->input('fecha');
        $ventas->save();
        return redirect()->back()->with('success', 'Venta creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ventas=Ventas::find($id);
        $ventas->fecha=$request->input('fecha');
        $ventas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ventas=Ventas::find($id);
        $ventas->delete();
        return redirect()->back();
    }
}
