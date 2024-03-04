

<div class="modal fade" id="verInsumosModal{{$id}}" tabindex="-1" role="dialog" aria-labelledby="verInsumosModalLabel{{$id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verInsumosModalLabel">Insumos del Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Insumo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Unidad de Medida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($insumosProductos as $insumoProducto)
                            <tr>
                                <td>{{ $insumoProducto->insumo->nombre }}</td>
                                <td>{{ $insumoProducto->cantidad }}</td>
                                <td>{{ $insumoProducto->unidadMedida->nombre }}</td>
                                <td>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
