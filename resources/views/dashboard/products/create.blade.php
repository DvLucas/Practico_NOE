@extends('dashboard.dashboard')

@section('product')

    <div class="col-10 mx-auto my-2 py-2 px-4 border">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3 class="text-center">Nuevo Producto</h3>
        <form action="{{route('products.store')}}" method="post">
            @csrf

            <div class="row">

                <div class="form-group col-6">
    
                    <label for="nombre" class=""> Nombre </label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control"
                        placeholder="Colocar Nombre">
                    <div class="row">
                        <div class="col">
                            <label for="Precio" class=""> Precio $</label>
                            <input type="text" name="price" value="{{old('price')}}" class="form-control"
                                placeholder="Colocar Precio">
                        </div>
                        <div class="col">
                            <label for="Stock" class=""> Stock </label>
                            <input type="text" name="stock" value="{{old('stock')}}" class="form-control"
                                placeholder="Colocar Stock">
                        </div>
                    </div>
    
                    <label for="descripcion" class=""> Descripcion </label>
                    <textarea class="form-control" placeholder="Actualizar Descripcion" name="description" rows="3">{{old('description')}}</textarea>
               
                </div>

                <div class="col-6 form-group d-flex flex-column">

                    <div class="mb-auto">
                        <label for="exampleFormControlSelect2">Seleccione Categoria</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2" name="category">
                            @foreach ($categoriesFathers as $categoryF)
                                <option value="" disabled class="text-center">{{ $categoryF->name_category }}</option>
                                @foreach ($categoriesChildren as $categoryH)
                                    @if ($categoryH->id_father_category == $categoryF->id_category)
                                        <option value="{{ $categoryH->id_category }}">{{$categoryH->name_category}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mt-auto">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Seleccione Marca</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="brand">
                            @foreach ($brands as $description => $id_brand)
                                <option value="{{ $id_brand }}">{{ $description }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>

                {{-- <div class="form-group col-6">
                    <div class="row">
    
                        @foreach ($categoriesFathers as $categoryF)
                            <div class="col-3 mb-2 px-1">
                                <div class="card card-body px-1">
                                    <h5 class="card-title">{{$categoryF->name_category}}</h5>
    
                                    @foreach ($categoriesChildren as $categoryH)
                                        @if ($categoryH->id_father_category == $categoryF->id_category)
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                    <input type="radio" id="radio{{$categoryH->id_category}}" name="idCategoria" value="{{$categoryH->id_category}}">
                                                    </div>
                                                </div>
                                                <label for="radio{{$categoryH->id_category}}" class="form-control" >{{$categoryH->name_category}}</label>
                                            </div>
                                        @endif
                                    @endforeach
    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
             --}}
            </div>
            <button class="btn btn-success text-center" name="nuevoProducto" value="TRUE">Agregar</button>

        </form>
    </div>

@endsection

