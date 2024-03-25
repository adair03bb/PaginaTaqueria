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

        select,
        input[type="text"],
        button {
            width: 150px; /* Ancho fijo para los inputs y botón */
            margin-bottom: 10px; /* Espacio entre los inputs y botón */
        }

        span {
            margin-left: 10px; /* Margen entre el precio y el descuento */
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
            <h2>Selecciona tus productos</h2>
            @foreach($productos as $producto)
                <div>
                    <label>{{ $producto->nombre }}:</label>
                    <input type="text" name="productos[{{ $producto->id }}]" value="0">
                    <label for="precio_{{ $producto->id }}">Precio:</label>
                    <span>{{ $producto->precio }}</span>
                    <label for="descuento_{{ $producto->id }}">Desc. (%):</label>
                    <select id="descuento_{{ $producto->id }}" name="descuento_{{ $producto->id }}">
                        @for ($i = 0; $i <= 30; $i += 5)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
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
