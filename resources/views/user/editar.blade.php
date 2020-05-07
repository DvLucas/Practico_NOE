@extends('layouts.master')

@section('title')
    Editar informacion
@endsection

@section('content')



<div class="container-fluid bg-logreg align-items-center">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card row form-registro my-3 justify-content-center row justify-content-center">

                <div class="col-12 text-center text-white titulos-categorias-tienda">
                    <h4>Editar informacion</h4>
                </div>

                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('user.update',$datos->id) }}" class="row justify-content-center text-white subtitulos" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group col-9">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $datos->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-9">
                            <label for="surname" class="col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $datos->surname }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-9">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $datos->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group col-9">
                            <label for="date_birth" class="col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="">
                                <input id="date_birth" type="date" class="form-control" name="date_birth" value="{{ $datos->date_birth}}" required autocomplete="date_birth" autofocus>


                            </div>
                        </div>


                        <div class="form-group col-9">
                            <label for="dni" class="col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="">
                                <input id="dni" type="number" class="form-control" name="dni" max="90000000" min="1000000" value="{{ $datos->dni}}" required autocomplete="dni" autofocus>


                            </div>
                        </div>









                        <div class="form-group col-9">
                            <label for="description" class=" col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="">
                                <textarea id="description" type="text" class="form-control" name="description" rows="6" cols="40" maxlength="255" value="{{ $datos->description }}" required autocomplete="description">
                                    {{ $datos->description }}
                                </textarea>

                            </div>
                        </div>



                        <div class="form-group col-9">
                            <label for="email" class=" col-form-label text-md-right">{{ __('Imagen perfil') }}</label>

                            <div class="">



                                <img width="100px" src="{{Storage::url($datos->profile_picture)}}" alt="">
                                <input type="file" name="profile_picture" accept="image/x-png,image/gif,image/jpeg" />
                            </div>
                        </div>



                        <div class="form-group col-9 mb-0 mt-3">
                            <div class=" offset-md-4">
                                <button type="submit" class="btn btn-outline-light btn-lg">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
