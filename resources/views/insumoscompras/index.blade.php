@extends('layouts/homeInsumosCompras')


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
        AGREGAR COMPRA
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">INSUMO</th>
                        <th scope="col">UNIDAD DE MEDIDA</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">COSTO</th>
                        <th scope="col">FECHA DE COMPRA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($insumosCompras as $insumosCompras)
                    <tr>
                        <td> {{$insumosCompras->id}} </td>
                        <td> {{$insumosCompras->Insumos->nombre}} </td>
                        <td> {{$insumosCompras->UnidadMedidas->nombre}} </td>
                        <td> {{$insumosCompras->cantidad}} </td>
                        <td> {{$insumosCompras->costo}} </td>
                        <td> {{$insumosCompras->fecha}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$insumosCompras->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#delete{{$insumosCompras->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('insumoscompras.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('insumoscompras.create')
</div>

</div>

@endsection