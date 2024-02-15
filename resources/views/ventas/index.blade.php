@extends('layouts/homeVentas')


@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br><br>
    <h3>ADMINISTRA TUS COMPRAS</h3>
    <br>

     <!-- Boton para regresar -->
     <a href="{{url('homeMenu')}}">
            <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
        </a>
        
        <!-- Boton para agregar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        AGREGAR COMPRA
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ventas as $ventas)
                    <tr>
                        <td> {{$ventas->id}} </td>
                        <td> {{$ventas->fecha}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$ventas->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$ventas->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('ventas.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('ventas.create')
</div>

</div>

@endsection