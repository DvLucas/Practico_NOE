@extends('dashboard.dashboard')

@section('product')
<div class="col-12">
    <div class="row justify-content-around">
        <div class="col-12 text-center mt-4">
            <h4>Categorias</h4>
        </div>
        <div class="col-6 my-2" style="overflow:scroll; height:400px;">
            <table class="table table-bordered" style=" ">
                <thead class="thead-ligth">
                    <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria Padre</th>
                    </tr>
                </thead> <!-- Columnas Tabla -->

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id_category}}</td>
                        <td>{{$category->name_category}}</td>
                        <td>{{$category->id_father_category}}</td>
                    </tr>
                    @endforeach
                </tbody> <!-- Registros Tabla -->
            </table>
        </div>
        <div class="col-4 my-2 p-0">
            <div class="border border-success rounded p-2">
                <h4 class="text-center font-weight-bolder">Agregar Categoria Nueva</h4>
                <form class="" action="" method="post">
                    <label for="nombre" class="mt-2"> Nombre </label>
                    <div class="input-group">
                        <input type="text" name="name" value="" class="form-control" placeholder="Colocar Nombre">
                    </div>
    
                    <div class="input-group d-flex mt-2">
                        <div class="col-6 my-1">
                            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Categoria Padre</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                @foreach ($categories as $category)
                                @if ($category->id_father_category == null)
                                <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    Categoria Padre
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success text-center" name="nuevoProducto" value="TRUE">Agregar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
