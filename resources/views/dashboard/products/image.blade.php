@extends('dashboard.dashboard')

@section('product')

<div class="col-10 text-center mt-2">
    <h3 class="card-title"> Subir Imagenes </h3>
    <form enctype="multipart/form-data" action="{{ route('gallery.store') }}" method="POST">
        @csrf
        <div class="form-group d-flex">
        <input type="text" name="name" readonly value="{{$productImg->name}}" class="form-control" name="nombre">
        <input type="text" readonly name="id_product" value="{{$productImg->id_product}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Seleccionar Imagenes</label>
            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
        </div>
        <button class="btn btn-success text-center" type="submit">Subir</button>
    </form>
</div>
<div class="col-10 border m-2 p-3">
    <div class="row">
        @foreach ($gallery as $item)
            <div class="col-12 col-md-2 text-center ">
                <a href=" {{ route( 'gallery.edit' , $item ) }} " class="bg-danger">
                    <img src="{{asset($item->url)}}" alt="{{$item->url}}" class='img-thumbnail img-product' data-store="{{$item->store}}">
                </a>
                <form action="{{route( 'gallery.destroy',$item )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mt-2" tipe="submit">
                        Eliminar
                    </button>
                </form>
            </div>
        @endforeach

        <script>
            const coll =  document.getElementsByClassName('img-product');
            var image = [];
            for(var i = 0; i < coll.length; i++) image.push(coll[i]);
            image.forEach(myFunction);
            function myFunction(item){
                store = item.dataset.store;
                if (store == 1){
                    item.classList.add('bg-success');
                }else{
                    item.classList.remove('bg-success');
                } 
            }
        </script>

    </div>
</div>


@endsection
