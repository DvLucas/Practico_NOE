@extends('layouts.master')

@section('title') 
    Hola! Ingresa con tu usuario
@endsection

@section('content')
<div class="container-fluid bg-logreg vh-100">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card row form-registro my-3 row justify-content-center">
                <div class="col-12 text-center text-white titulos-categorias-tienda">
                    <h1><i class="fas fa-user-circle"></i></h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" id ="login-form" class="row justify-content-center text-white subtitulos">
                        @csrf

                        <div class="form-group col-11 col-lg-8">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="parent-input-email">
                                <input id="email-login" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                         {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-11 col-lg-8 mb-0">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="parent-input-password">
                                <input id="password-login" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback mb-1" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-11 col-lg-8 reset-pass d-flex justify-content-between subtitulos">
                            @if (Route::has('password.request'))
                                    <a class="ForgetPwd mt-1" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                            @endif
                            <a href="{{route('register')}}" class="ForgetPwd mt-1">Registrarse</a>
                        </div>

                        <div class="form-group col-11 col-lg-8 text-left">
                                
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Recordarme') }}</label>
                                </div>
                        </div>
                        
                        <div class="form-group col-9 mb-0 text-center">
                                <button type="submit" class="btn btn-outline-light">
                                    {{ __('Ingresar') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
