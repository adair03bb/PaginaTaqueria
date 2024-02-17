
<!-- Modal DE ACTUALIZAR Y ELIMINAR -->
<div class="modal fade" id="edit{{$insumosProductos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR INSUMOS PROMEDIO DE CADA PRODUCTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('homeInsumosProductos.update',$insumosProductos->id)}}" method="post">
        @csrf 
        @method('PUT')
      <div class="modal-body">

      <div class="mb-3">
            <label for="" class="form-label">Producto:</label>
            <select name="ID_Producto" id="" class="form-control">
                @foreach($productos as $productos)
                @if($productos->id == $insumosProductos->ID_Producto)
                <option value="{{$productos->id}}" selected> {{$productos->nombre}} </option>
                @else
                <option value="{{$productos->id}}"> {{$productos->nombre}} </option>
                @endif
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Insumo:</label>
            <select name="ID_Insumo" id="" class="form-control">
                @foreach($insumos as $insumos)
                @if($insumos->id == $insumosProductos->ID_Insumo)
                <option value="{{$insumos->id}}" selected> {{$insumos->nombre}} </option>
                @else
                <option value="{{$insumos->id}}"> {{$insumos->nombre}} </option>
                @endif
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="" value="{{$insumosProductos->cantidad}}"/>
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
<div class="modal fade" id="delete{{$insumosProductos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR INSUMOS DE  LOS PRODUCTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="{{route('homeInsumosProductos.destroy', $insumosProductos->id)}}" method="post">
        @csrf 
        @method('DELETE')
      <div class="modal-body">
       ¿ESTAS SEGURO DE ELIMINAR EL REGISTRO <strong>{{$insumosProductos->id}} ?</strong>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>