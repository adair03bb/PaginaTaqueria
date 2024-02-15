@extends('layouts/homeProductos')


@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br><br>
    <h3>ADMINISTRA TUS PRODUCTOS</h3>
    <br>
        
        <!-- Boton para regresar -->
        <a href="{{url('homeMenu')}}">
                <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
            </a>

        <!-- Boton para agregar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        AGREGAR PRODUCTO
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($productos as $productos)
                    <tr>
                        <td> {{$productos->id}} </td>
                        <td> {{$productos->nombre}} </td>
                        <td> {{$productos->precio}} </td>
                        <td> {{$productos->Categoria->nombre}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$productos->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$productos->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('productos.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('productos.create')
</div>

</div>

@endsection