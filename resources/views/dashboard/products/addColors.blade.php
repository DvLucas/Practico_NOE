@extends('dashboard.dashboard')


@section('product')

    <div class="col-8 justify-content-center mt-2">
        
        <div class="card">
            <div class="card-header titulos-header bg-light">
                Seleccion de colores
            </div>
            
            <div class="card-body">
                <form action="{{route('colors_products.store')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        {{Form::hidden('id_product', $id_product)}}
                    </div>

                    <div class="form-group categorias-tienda">
                        {{Form::label('Nombre del producto', $name_product)}}
                    </div>
                    <hr>
                    <div class="form-group ">
                        <label for="message-text" class="col-form-label categorias-tienda">Colores:</label>

                        <div class="form-group">
                        @foreach($colors as $color)
                            @if(in_array($color->id_color, $colors_stocked))
                                <div class="">
                                    <input disabled type="checkbox" value="" name="colors[]"> {{$color->name}}
                                </div>
                            @else
                                <div class="">
                                    <input type="checkbox" value="{{$color->id_color}}" name="colors[]"> {{$color->name}}
                                </div>
                            @endif 
                        @endforeach
                        
                        </div> 

                    </div>

                    <div class="form-group">
                        {{Form::submit('Guardar', ['class'=> 'btn btm-sm bg-yellow float-right'])}}
                    </div>

                </form>
            </div>
        </div>
    </div>
      

@endsection
