@extends('layouts/homeCompras')


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
                @foreach($compras as $compras)
                    <tr>
                        <td> {{$compras->id}} </td>
                        <td> {{$compras->fecha}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$compras->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$compras->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('compras.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('compras.create')
</div>

</div>

@endsection