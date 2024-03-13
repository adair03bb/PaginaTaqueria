    @extends('layouts/home')


    @section('content')

    <div class="col-md-2"> <!-- Reducido el ancho a 2 columnas -->
        <div class="card menu-card">
            <div class="card-body">
                <!-- Añade un botón con el símbolo de las tres líneas (hamburguesa) -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">&#9776;</span>
                </button>
                <!-- Título del menú principal -->
                <h5 class="card-title" id="menuTitle" style="display:none;">MENU PRINCIPAL</h5>

                <!-- Contenedor del menú que se mostrará u ocultará según el estado del botón -->
                <div class="collapse" id="menuPrincipal">
                    <ul class="list-group">
<a href="{{url('homeMenu')}}" class="list-group-item">Inicio</a>

                        <a href="{{url('homeInsumosCompras')}}" class="list-group-item">Compras</a>
                        <a href="{{url('homeInventario')}}" class="list-group-item">Inventario</a>
                        <a href="{{url('homeVentas')}}" class="list-group-item">Ventas</a>
                        <li class="list-group-item dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más opciones</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('home')}}">Insumos</a>
                                <a class="dropdown-item" href="{{url('homeProductos')}}">Productos</a>
                                <a class="dropdown-item" href="{{url('homeCategorias')}}">Categorías</a>
                                <a class="dropdown-item" href="{{url('homeUnidadMedidas')}}">Unidades de medida</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


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
                            <td> {{$insumos->unidadMedida->nombre}} </td>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    @endsection