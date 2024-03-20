<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenTaco;

class OrdenControlador extends Controller
{
    public function crear()
    {
        // Simplemente devuelve la vista del formulario
        return view('mesas.agregarOrden');
    }

    public function guardar(Request $request)
{
    // Verificar los datos recibidos desde el formulario
    //dd($request->all());

    // Asignar las cantidades de tacos al modelo OrdenTaco
    $orden = new OrdenTaco();
    $orden->nombre_cliente = $request->nombre_cliente;
    $orden->al_pastor = $request->input('tacos.al_pastor', 0);
    $orden->de_carnitas = $request->input('tacos.de_carnitas', 0);
    $orden->de_bistec = $request->input('tacos.de_bistec', 0);
    $orden->de_barbacoa = $request->input('tacos.de_barbacoa', 0);

    // Verificar el modelo OrdenTaco con las cantidades de tacos
    //dd($orden);

    // Intentar guardar la orden en la base de datos
    try {
        $orden->save();
    } catch (\Exception $e) {
        // Capturar y mostrar cualquier error que ocurra durante el proceso de guardado
        dd($e);
    }

    // Redirigir con un mensaje de éxito si el guardado fue exitoso
    return back()->with('success', 'Orden agregada con éxito.');
}
}
