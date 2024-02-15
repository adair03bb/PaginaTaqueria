<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use Illuminate\Http\Request;

class ComprasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras=Compras::all();
        return view('compras.index',compact('compras'));
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
        $compras=new Compras;
        $compras->fecha=$request->input('fecha');
        $compras->save();
        return redirect()->back()->with('success', 'Compra creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $compras=Compras::find($id);
        $compras->fecha=$request->input('fecha');
        $compras->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $compras=Compras::find($id);
        $compras->delete();
        return redirect()->back();
    }
}
