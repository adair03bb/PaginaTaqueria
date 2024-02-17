@extends('layouts/homeInventario')


@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br><br>
    <h3>AGREGA NUEVAS COMPRAS DE TUS INSUMOS</h3>
    <br>
        
        <!-- Boton para regresar -->
        <a href="{{url('homeMenu')}}">
                <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
            </a>

        <!-- Boton para agregar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        ADMINISTRAR INVENTARIO
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">COMPRA DE INSUMO</th>
                        <th scope="col">FECHA DE CADUCIDAD</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($inventario as $inventario)
                    <tr>
                        <td> {{$inventario->id}} </td>
                        <td> {{$inventario->insumosCompras->id}} </td>
                        <td> {{$inventario->fechaCaducidad}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$inventario->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$inventario->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('inventario.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('inventario.create')
</div>

</div>

@endsection