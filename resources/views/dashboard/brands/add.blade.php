
<div class="col-10 col-sm-4 mx-3 my-2 p-0">
    <div class="border rounded p-2">
        <h4 class="text-center font-weight-bolder">Agregar Marca Nueva</h4>
        <form class="" action="{{route('brands.store')}}" method="post">
            @csrf
            <label for="nombre" class="mt-2"> Nombre </label>
            <div class="input-group">
                <input type="text" name="description" value="" class="form-control"
                    placeholder="Colocar Nombre" required>
            </div>

            <div class="text-center mt-2">
                <button class="btn btn-success text-center">Agregar</button>
            </div>
        </form>
    </div>

    @if (session('state'))
    <div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
        {{session('state')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
</div>
