
<!-- Modal DE ACTUALIZAR Y ELIMINAR -->
<div class="modal fade" id="edit{{$insumoProducto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR INSUMOS PROMEDIO DE CADA PRODUCTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('homeInsumosProductos.update',$insumoProducto->id)}}" method="post">
        @csrf 
        @method('PUT')
      <div class="modal-body">

      <div class="mb-3">
            <label for="" class="form-label">Producto:</label>
            <select name="ID_Producto" id="" class="form-control">
                @foreach($productos as $producto)
                @if($producto->id == $insumoProducto->ID_Producto)
                <option value="{{$producto->id}}" selected> {{$producto->nombre}} </option>
                @else
                <option value="{{$producto->id}}"> {{$producto->nombre}} </option>
                @endif
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Insumo:</label>
            <select name="ID_Insumo[]" id="" class="form-control" multiple>
                @foreach($insumos as $insumo)
                @if($insumo->id == $insumoProducto->ID_Insumo)
                <option value="{{$insumo->id}}" selected> {{$insumo->nombre}} </option>
                @else
                <option value="{{$insumo->id}}"> {{$insumo->nombre}} </option>
                @endif
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
                        <label for="" class="form-label">Cantidades:</label>
                        @foreach($insumos as $insumoCantidad)
                        <div class="mb-2">
                            <label for="cantidad_{{ $insumoCantidad->id }}">{{ $insumoCantidad->nombre }}:</label>
                            <input type="number" step="any" class="form-control" name="cantidades[{{ $insumoCantidad->id }}]" id="cantidad_{{ $insumoCantidad->id }}" aria-describedby="helpId" placeholder="" />
                        </div>
                        @endforeach
          </div>


       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- VALIDACION PARA ELIMINAR REGISTRO -->
<div class="modal fade" id="delete{{$insumoProducto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR INSUMOS DE  LOS PRODUCTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="{{route('homeInsumosProductos.destroy', $insumoProducto->id)}}" method="post">
        @csrf 
        @method('DELETE')
      <div class="modal-body">
       ¿ESTAS SEGURO DE ELIMINAR EL REGISTRO <strong>{{$insumoProducto->id}} ?</strong>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>