@extends('layouts/homeCategorias')


@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br><br>
    <h3>ADMINISTRA TUS CATEGORIAS</h3>
    <br>

     <!-- Boton para regresar -->
     <a href="{{url('homeMenu')}}">
            <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
        </a>
        
        <!-- Boton para agregar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        AGREGAR CATEGORIA
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categoria as $categoria)
                    <tr>
                        <td> {{$categoria->id}} </td>
                        <td> {{$categoria->nombre}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$categoria->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$categoria->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('categorias.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('categorias.create')
</div>

</div>

@endsection