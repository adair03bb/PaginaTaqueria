@extends('layouts.homeMenu')

@section('content')

<script src="{{ asset('js/menuDesplegable.js') }}"></script>

<div class="row">

    <div class="col-md-2"> <!-- Reducido el ancho a 2 columnas -->
        <div class="card menu-card">
            <div class="card-body">
                <!-- Añade un botón con el símbolo de las tres líneas (hamburguesa) -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">&#9776;</span>
                </button>

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

   
    <div class="col-md-9 d-flex">
        <div class="col-md-4">
        
            <div class="card">
                <div class="card-body">
                    <div class="card-image"> <img src="{{ asset('imagenes/compras.jpg') }}" alt="SECCION DE COMPRAS" class="img-fluid" style="margin: 1rem;">
                    </div>
                    <h5 class="card-title">SECCIÓN DE COMPRAS</h5>
                    <p class="card-text">Administra tus compras de insumos.</p>
                    <a href="{{url('homeInsumosCompras')}}" class="btn btn-primary">Ir a compras :D</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-image"> <img src="{{ asset('imagenes/inventario.jpg') }}" alt="SECCION DE INVENTARIO" class="img-fluid" style="margin: 1rem;">
                    </div>
                    <h5 class="card-title">SECCIÓN DE INVENTARIO</h5>
                    <p class="card-text">Administra tu inventario.</p>
                    <a href="{{url('homeInventario')}}" class="btn btn-primary">Ir a Inventario :D</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-image"> <img src="{{ asset('imagenes/ventas.jpg') }}" alt="SECCION DE VENTAS" class="img-fluid" style="margin: 1rem;">
                    </div>
                    <h5 class="card-title">SECCIÓN DE ORDENES</h5>
                    <p class="card-text">Administra tus ordenes.</p>
                    <a href="{{url('homeVentas')}}" class="btn btn-primary">Ir a ventas :D</a>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Agrega las referencias a Bootstrap y jQuery antes de cerrar el cuerpo del documento -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


@endsection
