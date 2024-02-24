@extends('layouts/homeUnidadMedidas')


@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br><br>
    <h3>ADMINISTRA TUS UNIDADES DE MEDIDA</h3>
    <br>

     <!-- Boton para regresar -->
     <a href="{{url('homeMenu')}}">
            <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
        </a>
        
        <!-- Boton para agregar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        AGREGAR UNIDAD DE MEDIDA
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE DE LA UNIDAD</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($unidadMedidas as $unidadMedidas)
                    <tr>
                        <td> {{$unidadMedidas->id}} </td>
                        <td> {{$unidadMedidas->nombre}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$unidadMedidas->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$unidadMedidas->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('unidadmedidas.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('unidadmedidas.create')
</div>

</div>

@endsection