<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12 bg-light py-2">
                        <h3 class="card-title"> Subir Imagenes </h3>
                        <form enctype="multipart/form-data" action="{{ route('gallery.store') }}" method="POST">
                            @csrf
                            <div class="form-group d-flex">
                                <input type="text" name="name" value="" class="form-control" id="inputName"
                                    name="nombre">
                                <input id="inputId" type="text" readonly name="id_product" value=""
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Seleccionar Imagenes</label>
                                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                            </div>
                            <button class="btn btn-success text-center" type="submit">Subir</button>
                        </form>
                    </div> <!-- subir imagen -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
