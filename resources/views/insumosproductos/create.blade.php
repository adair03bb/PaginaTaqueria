

<!-- Modal DE AGREGAR -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR NUEVO PRODUCTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('homeInsumosProductos.store')}}" method="post">
        @csrf 
      <div class="modal-body">


        <div class="mb-3">
            <label for="" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder=""/>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Insumo:</label>
            <select name="ID_Insumo" id="" class="form-control">
                @foreach($insumos as $insumos)
                <option value="{{$insumos->id}}"> {{$insumos->nombre}} </option>
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Producto:</label>
            <select name="ID_Producto" id="" class="form-control">
                @foreach($productos as $productos)
                <option value="{{$productos->id}}"> {{$productos->id}} </option>
                @endforeach
            </select>
           
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