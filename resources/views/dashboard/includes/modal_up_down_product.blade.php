<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($product->state == 0)
                    <p>¿Seguro que desea dar alta al producto seleccionado?</p>
                    <p>Al darle de alta se encontrara disponible en tienda</p>
                @else
                    <p>¿Seguro que desea quitar el producto seleccionado?</p>
                    <p>Si lo quita no estara disponible en la tienda</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <form id="formDelete" method="POST" action="{{ route('products.destroy',0) }}"
                        data-action="{{ route('products.destroy',0) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Actualizar</button>
                    </form>
            </div>
        </div>
    </div>
</div>