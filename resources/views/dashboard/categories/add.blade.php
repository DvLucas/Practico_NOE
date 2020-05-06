
<div class="col-10 col-sm-4 mx-3 my-2 p-0">
    <div class="border rounded p-2">
        <h4 class="text-center font-weight-bolder">Agregar Categoria Nueva</h4>
        <form class="" action="{{route('categories.store')}}" method="post">
            @csrf
            <label for="nombre" class="mt-2"> Nombre </label>
            <div class="input-group">
                <input type="text" name="name_category" value="" class="form-control"
                    placeholder="Colocar Nombre" required>
            </div>

            <div class="input-group d-flex mt-2">
                <div class="col-6 my-1">
                    <label class="mr-sm-2 sr-only" for="selectCategoryChild">Categoria Padre</label>
                    <select class="custom-select mr-sm-2" id="selectCategoryChild" name="id_father_category">
                        @foreach ($categories as $category)
                        @if ($category->id_father_category == null)
                        <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-6 my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input value="" type="checkbox" class="custom-control-input"
                            name="id_father_category" id="checkCategoryFather">
                        <label class="custom-control-label" for="checkCategoryFather">
                            Categoria Padre
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-center">
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
