@extends('layouts/homeInsumosProductos')


@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br><br>
    <h3>ADMINISTRA TUS PRODUCTOS</h3>
    <br>
        
        <!-- Boton para agregar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
        NUEVO
        </button>
        
        <br><br>


        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">INSUMO</th>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($insumosProductos as $insumosProductos)
                    <tr>
                        <td> {{$insumosProductos->id}} </td>
                        <td> {{$insumosProductos->cantidad}} </td>
                        <td> {{$insumosProductos->Insumos->nombre}} </td>
                        <td> {{$insumosProductos->Productos->id}} </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$insumosProductos->id}}">
                            EDITAR
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$insumosProductos->id}}">
                            ELIMINAR   
                        </button>
        
                        </td>
                    </tr>

                    @include('insumosproductos.info')

                    @endforeach
                </tbody>
            </table>
        </div>

        @include('insumosproductos.create')
</div>

</div>

@endsection