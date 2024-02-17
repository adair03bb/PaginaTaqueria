

<!-- Modal DE AGREGAR -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR FECHAS A TUS INSUMOS COMPRADOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('homeInventario.store')}}" method="post">
        @csrf 
      <div class="modal-body">

      <div class="mb-3">
            <label for="" class="form-label">Compra de insumo:</label>
            <select name="ID_InsumoCompra" id="" class="form-control">
                @foreach($insumosCompras as $insumosCompras)
                <option value="{{$insumosCompras->id}}"> {{$insumosCompras->id}} </option>
                @endforeach
            </select>
           
        </div>  
      

        <div class="mb-3">
            <label for="" class="form-label">Fecha de caducidad:</label>
            <input type="date" class="form-control" name="fechaCaducidad" id="fechaCaducidad" aria-describedby="helpId" placeholder=""/>
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