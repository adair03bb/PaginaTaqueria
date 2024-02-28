

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
            <label for="" class="form-label">Producto:</label>
            <select name="ID_Producto" id="" class="form-control">
                @foreach($productos as $producto)
                <option value="{{$producto->id}}"> {{$producto->nombre}} </option>
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Categoria:</label>
            <select name="ID_Categoria" id="" class="form-control">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}"> {{$categoria->nombre}} </option>
                @endforeach
            </select>
           
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Insumo:</label>
            <select name="ID_Insumo[]" id="" class="form-control" multiple>
                @foreach($insumos as $insumo)
                <option value="{{$insumo->id}}"> {{$insumo->nombre}} </option>
                @endforeach
            </select>
           
        </div>


        <div class="mb-3">
                        <label for="" class="form-label">Cantidades:</label>
                        @foreach($insumos as $insumoCantidad)
                        <div class="mb-2">
                            <label for="cantidad_{{ $insumoCantidad->id }}">{{ $insumoCantidad->nombre }}:</label>
                            <input type="number" step="any" class="form-control" name="cantidades[{{ $insumoCantidad->id }}]" id="cantidad_{{ $insumoCantidad->id }}" aria-describedby="helpId" placeholder="" />
                          
                            <!--AGREGAR UNIDAD DE MEDIDA PARA CADA INUSMO-->
                            <label for="" class="form-label">Unidad Medida:</label>
                            <select name="ID_UnidadMedida" id="" class="form-control">
                            @foreach($unidadMedida as $unidad)
                            <option value="{{$unidad->id}}"> {{$unidad->nombre}} </option>
                           @endforeach
                          </select>
                        </div>
                        @endforeach
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>