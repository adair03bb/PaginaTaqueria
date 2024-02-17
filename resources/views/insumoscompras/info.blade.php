
<!-- Modal DE ACTUALIZAR Y ELIMINAR -->
<div class="modal fade" id="edit{{$insumosCompras->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR TUS COJMPRAS DE INSUMOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('homeInsumosCompras.update',$insumosCompras->id)}}" method="post">
        @csrf 
        @method('PUT')
      <div class="modal-body">
      
      <div class="mb-3">
            <label for="" class="form-label">Insumo:</label>
            <select name="ID_Insumo" id="" class="form-control">
                @foreach($insumos as $insumos)
                @if($insumos->id == $insumosCompras->ID_Insumo)
                <option value="{{$insumos->id}}" selected> {{$insumos->nombre}} </option>
                @else
                <option value="{{$insumos->id}}"> {{$insumos->nombre}} </option>
                @endif
                @endforeach
            </select>
           
        </div>
      
      <div class="mb-3">
            <label for="" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="" value="{{$insumosCompras->cantidad}}"/>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Costo:</label>
            <input type="number" class="form-control" name="costo" id="costo" aria-describedby="helpId" placeholder="" value="{{$insumosCompras->costo}}"/>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha:</label>
            <input type="datetime-local" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="" value="{{$insumosCompras->fecha}}"/>
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
<div class="modal fade" id="delete{{$insumosCompras->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR COMPRA DE INSUMOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="{{route('homeInsumosCompras.destroy', $insumosCompras->id)}}" method="post">
        @csrf 
        @method('DELETE')
      <div class="modal-body">
       ¿ESTAS SEGURO DE ELIMINAR EL REGISTRO <strong>{{$insumosCompras->id}} ?</strong>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>