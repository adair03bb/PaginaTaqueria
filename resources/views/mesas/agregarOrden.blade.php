@extends('layouts.homeVentas')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Orden</title>
    <style>
        body {
            text-align: center; /* Para centrar los textos */
            position: relative; /* Se necesita para el posicionamiento absoluto del enlace */
        }

        .enlace-atras {
            position: absolute; /* Para posicionar el enlace de forma absoluta */
            top: 180px; /* Ajusta la distancia desde arriba */
            left: 10px; /* Ajusta la distancia desde la izquierda */
        }

        form {
            display: inline-block;
            text-align: left; /* Para alinear el contenido del formulario a la izquierda */
        }

        label {
            display: inline-block;
            width: 150px; /* Ancho fijo para los labels */
            text-align: right; /* Para alinear el texto del label a la derecha */
        }

        input[type="text"],
        input[type="number"],
        button {
            width: 200px; /* Ancho fijo para los inputs y botón */
            margin-bottom: 10px; /* Espacio entre los inputs y botón */
        }
    </style>
</head>
<body>
    <a href="{{url('homeVentas')}}" class="enlace-atras">
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
                    <input type="text" name="tacos[{{ $tipo }}]" value="0">
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
