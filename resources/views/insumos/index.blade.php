    @extends('layouts/home')


    @section('content')


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

        <br><br>
        <h3>ADMINISTRA TUS INSUMOS</h3>
        <br>

         <!-- Boton para regresar -->
         <a href="{{url('homeMenu')}}">
            <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
        </a>
            
            <!-- Boton para agregar -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            AGREGAR INSUMO
            </button>
            
            <br><br>


            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">DESCRIPCIÓN</th>
                            <th scope="col">UNIDAD DE MEDIDA</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($insumos as $insumos)
                        <tr>
                            <td> {{$insumos->id}} </td>
                            <td> {{$insumos->nombre}} </td>
                            <td> {{$insumos->descripcion}} </td>
                            <td> {{$insumos->UnidadMedidas->nombre}} </td>
                            <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$insumos->id}}">
                                EDITAR
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$insumos->id}}">
                                ELIMINAR   
                            </button>
            
                            </td>
                        </tr>

                        @include('insumos.info')

                        @endforeach
                    </tbody>
                </table>
            </div>

            @include('insumos.create')
    </div>

</div>

    @endsection