@extends('layouts.homeVentas')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Orden</title>
</head>
<body>
<a href="{{url('homeVentas')}}">
            <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
</a>
    <h1>Completa los campos para realizar tu orden</h1>
    <form action="{{ route('orden.guardar') }}" method="POST">
        @csrf
        <div>
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required>
        </div>
        <div>
            <h2>Selecciona tus tacos</h2>
            @foreach(['al pastor', 'de carnitas', 'de bistec', 'de barbacoa'] as $tipo)
                <div>
                    <label>{{ ucfirst($tipo) }}:</label>
                    <input type="number" name="tacos[{{ $tipo }}]" min="0" value="0">
                </div>
            @endforeach
        </div>
        <div>
            <button type="submit">Agregar Orden</button>
        </div>
    </form>
</body>
</html>
@endsection
