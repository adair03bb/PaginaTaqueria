@extends('layouts/homeProductos')


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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var insumo = @json($insumo);
    var unidadMedida = @json($unidadMedida);
</script>
<script src="{{ asset('js/agregarInsumos.js') }}"></script>


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

        
       <!-- Mostrar mensaje de éxito -->
@if(session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
    </div>

    <script>
        // Agrega un retraso de 2000 milisegundos (2 segundos) y luego oculta el mensaje
        setTimeout(function(){
            document.getElementById('successMessage').style.display = 'none';
        }, 2000);
    </script>
@endif


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
                            EDITAR PROD.
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$productos->id}}">
                            ELIMINAR PROD.   
                        </button>


                        <!-- Botón para agregar insumos -->
                        <button type="button" class="btn btn-info btn-insumos" data-toggle="modal" data-target="#agregarInsumosModal{{$productos->id}}" 
                                data-nombre="{{$productos->nombre}}" data-categoria="{{$productos->Categoria->nombre}}">
                            INSUMOS
                        </button>


                        

   <!-- Modal para agregar insumos -->
<div class="modal fade" id="agregarInsumosModal{{$productos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR INSUMOS AL PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Formulario para agregar insumos -->
            <form action="{{ route('insumosproductos.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <!-- Input oculto para pasar el ID del producto -->
                    <input type="hidden" name="ID_Producto" value="{{ $productos->id }}">
                    <!-- Campos para mostrar el nombre y la categoría del producto seleccionado -->
                    <div class="mb-3">
                        <label for="nombreProducto" class="form-label">Nombre del Producto:</label>
                        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" value="{{ $productos->nombre }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="categoriaProducto" class="form-label">Categoría del Producto:</label>
                        <input type="text" class="form-control" id="categoriaProducto" name="categoriaProducto" value="{{ $productos->Categoria->nombre }}" readonly>
                    </div>

                    <label for="">Presiona para agregar tus insumos:</label>
                    <br>

                    <!-- Cambia los IDs por clases en los elementos de los botones -->
                    <button type="button" class="btn btn-success agregarCampoInsumo">+</button>
                    <button type="button" class="btn btn-danger eliminarCampoInsumo">-</button>

                     <!-- Contenedor para campos dinámicos -->
                     <div class="camposInsumoDinamicos"></div>


                    <!-- Tabla para mostrar los insumos agregados -->
                    @if($productos->insumosProductos->isNotEmpty())
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Insumo</th>
                                    <th>Cantidad</th>
                                    <th>U.Medida</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos->insumosProductos as $insumoAgregado)
                                    <tr>
                                        <td>{{ $insumoAgregado->insumo->nombre }}</td>
                                        <td>{{ $insumoAgregado->cantidad }}</td>
                                        <td>{{ $insumoAgregado->unidadMedida->nombre }}</td>
                                        <td>
                                            <!-- Botón para abrir el modal de confirmación -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteConfirmation{{$insumoAgregado->id}}">
                                                Eliminar
                                            </button>
                                            <!-- Botón para abrir el modal de confirmación -->
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarInsumoModal{{$insumoAgregado->id}}">
                                                Editar
                                            </button>

                                            
                                        </td>
                                    </tr>

                                    <!-- Modal de confirmación para eliminar el insumo -->
    <div class="modal fade" id="deleteConfirmation{{$insumoAgregado->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationLabel{{$insumoAgregado->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationLabel{{$insumoAgregado->id}}">ELIMINAR INSUMO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de eliminar el insumo <strong>{{$insumoAgregado->insumo->nombre}} </strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <!-- Formulario para enviar la solicitud DELETE al confirmar -->
                    <form action="{{ route('insumosproductos.destroy', $insumoAgregado->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No hay insumos asociados a este producto.</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar Insumo</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de edicon de insumos -->

@foreach($productos->insumosProductos as $insumoAgregado)
    <div class="modal fade" id="editarInsumoModal{{$insumoAgregado->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Insumo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para editar insumo -->
                    <form action="{{ route('editarInsumos', $insumoAgregado->id) }}" method="post">
    @csrf 
    @method('PUT')
    <!-- Campos de edición -->
    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="number" step="any" class="form-control" id="cantidad" name="cantidad" value="{{ $insumoAgregado->cantidad }}">
    </div>
    <div class="form-group">
        <label for="insumo">Insumo:</label>
        <select class="form-control" id="insumo" name="insumo">
            @foreach($insumo as $insumoItem)
                <option value="{{ $insumoItem->id }}" {{ $insumoItem->id == $insumoAgregado->insumo->id ? 'selected' : '' }}>
                    {{ $insumoItem->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="unidadMedida">Unidad de Medida:</label>
        <select class="form-control" id="unidadMedida" name="unidadMedida">
            @foreach($unidadMedida as $unidad)
                <option value="{{ $unidad->id }}" {{ $unidad->id == $insumoAgregado->unidadMedida->id ? 'selected' : '' }}>
                    {{ $unidad->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-warning mt-2">Guardar Cambios</button>
</form>
                </div>
            </div>
        </div>
    </div>
@endforeach              </td>
                    </tr>

                    @include('productos.info')
                   
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('productos.create')
</div>
</div>


<!-- Agrega las referencias a Bootstrap y jQuery antes de cerrar el cuerpo del documento -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


@endsection


