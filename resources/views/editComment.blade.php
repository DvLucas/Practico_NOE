<div class="modal fade" id="editCommentsModal" tabindex="-1" role="dialog" aria-labelledby="editCommentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCommentsModalLabel">Editar Comentario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('comments.update', 0)}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <input hidden  type="text" id="id_comment" name="id_comment">
                    </div>
                    <div class="form-group">
                        <textarea class="col-12" id="body" name="body"></textarea>
                    </div>  
                    <button class="btn btn-outline-dark primary btn-sm" type="submit">Editar</button>  
                </form>
            </div>
        </div>
    </div>
</div>