@extends('layouts.master')

@section('title') 
    Registrate en NOE
@endsection

@section('content')
<div class="container-fluid bg-logreg align-items-center">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card row form-registro my-3 justify-content-center row justify-content-center">
                
                <div class="col-12 text-center text-white titulos-categorias-tienda">
                    <h4>Registrarse</h4>
                </div>

                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('register') }}" class="row justify-content-center text-white subtitulos">
                        @csrf
                        
                        <div class="form-group col-9">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-9">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-9">
                            <label for="password-confirm" class=" col-form-label text-md-right">
                                {{ __('Confirmar Contraseña') }}
                            </label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group col-9 mb-0 mt-3">
                            <div class=" offset-md-4">
                                <button type="submit" class="btn btn-outline-light btn-lg">
                                    {{ __('Registrar') }}
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
