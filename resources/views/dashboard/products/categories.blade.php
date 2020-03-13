@extends('dashboard.dashboard')

@section('product')
<div class="col-12">
    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12 text-center mt-4">
            <h4>Categorias</h4>
        </div>
        <div class="col-6 mx-3 my-2 border rounded p-2" style=" height:500px;">
            <div class="row" style=" height:500px;">
                <div class="col-12 align-self-start">
                    <table class="table table-bordered table-striped" style=" ">
                        <thead class="thead-dark ">
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
                                @if ($category->id_father_categoryf)
                                    @foreach ($category->id_father_categoryf as $categoryF)
                                        <td>{{$categoryF->name_category}}</td>  
                                    @endforeach 
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody> <!-- Registros Tabla -->
                    </table>
                </div>
                <div class="col-12 align-self-end">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
        <div class="col-4 mx-3 my-2 p-0">
            <div class="border rounded p-2">
                <h4 class="text-center font-weight-bolder">Agregar Categoria Nueva</h4>
                <form class="" action="{{route('categories.store')}}" method="post">
                    @csrf
                    <label for="nombre" class="mt-2"> Nombre </label>
                    <div class="input-group">
                        <input type="text" name="name_category" value="" class="form-control" placeholder="Colocar Nombre" required>
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
                                <input value="NULL" type="checkbox" class="custom-control-input" name="id_father_category" id="checkCategoryFather">
                                <label class="custom-control-label" for="checkCategoryFather">
                                    Categoria Padre
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success text-center" >Agregar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
