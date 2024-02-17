
<!-- Modal DE ACTUALIZAR Y ELIMINAR -->
<div class="modal fade" id="edit{{$inventario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITA TU INVENTARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('homeInventario.update',$inventario->id)}}" method="post">
        @csrf 
        @method('PUT')
      <div class="modal-body">
      
      <div class="mb-3">
            <label for="" class="form-label">Compra de Insumo:</label>
            <select name="ID_InsumoCompra" id="" class="form-control">
                @foreach($insumosCompras as $insumosCompras)
                @if($insumosCompras->id == $inventario->ID_InsumoCompra)
                <option value="{{$insumosCompras->id}}" selected> {{$insumosCompras->id}} </option>
                @else
                <option value="{{$insumosCompras->id}}"> {{$insumosCompras->id}} </option>
                @endif
                @endforeach
            </select>
           
        </div>
      

        <div class="mb-3">
            <label for="" class="form-label">Fecha de caducidad:</label>
            <input type="date" class="form-control" name="fechaCaducidad" id="fechaCaducidad" aria-describedby="helpId" placeholder="" value="{{$inventario->fechaCaducidad}}"/>
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
<div class="modal fade" id="delete{{$inventario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR REGISTROS DEL INVENTARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="{{route('homeInventario.destroy', $inventario->id)}}" method="post">
        @csrf 
        @method('DELETE')
      <div class="modal-body">
       ¿ESTAS SEGURO DE ELIMINAR EL REGISTRO <strong>{{$inventario->id}} ?</strong>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>