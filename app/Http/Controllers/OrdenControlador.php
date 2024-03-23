<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenTaco;

class OrdenControlador extends Controller
{
    public function crear()
    {
        return view('mesas.agregarOrden');
    }
    public function guardar(Request $request)
{
    $orden = new OrdenTaco();
    $orden->nombre_cliente = $request->nombre_cliente;
    $orden->al_pastor = $request->input('tacos.al_pastor', 0);
    $orden->de_carnitas = $request->input('tacos.de_carnitas', 0);
    $orden->de_bistec = $request->input('tacos.de_bistec', 0);
    $orden->de_barbacoa = $request->input('tacos.de_barbacoa', 0);

    try {
        $orden->save();
    } catch (\Exception $e) {
        dd($e);
    }
    return back()->with('success', 'Orden agregada con éxito.');
}
}
