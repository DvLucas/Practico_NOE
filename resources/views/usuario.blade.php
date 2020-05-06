@extends('layouts.master')

@section('content')

        <!--DETALLE USUARIO-->
        <main>

          <!-- Header Main -->

              @if(session('mensaje'))
                  <div class="alert alert-success">{{session('mensaje')}}

                  </div>
              @endif

          <div class="jumbotron header-usuario">
              <div class="row container col-md-12 h-100 justify-content-center m-0">

                  <h2 class="text-white my-auto titulos-importantes">
                      <strong>
                          MI USUARIO
                      </strong>
                  </h2>

              </div>
          </div>

          <div class="usuario overflow-hidden p-0 my-3">
            <!--fila-->
            <div class="row px-0">
              <!--imagen de usuario-->
              <div class="foto bg-white  justify-content-center col-lg-3 usuario_col align-items-center">

                <div class="row px-0">

                  <div class="col-12 text-center">

                      <img src="{{Storage::url($datos->profile_picture)}}" alt=""width="300" height="200" alt="foto-perfil" class="user-image">

                  </div>



                </div>

              </div>

              <!--descripcion del usuario-->
              <div class="informacion bg-white  py-3 px-4 col-lg-4 usuario_col">
                <!--nombre de usuario-->
                <h4 class="titulos-medio px-3">
                {{$datos->name}} {{$datos->surname}}

                </h4>
                <!--texto del usuario-->
                @if( auth()->user()->description !=null)
                    <p class="texto-parrafo px-10">{{$datos->description}}</p>



                @else


                <p class="texto-parrafo px-3">I am a person who is positive about every aspect of life.</p>
                <p class="texto-parrafo px-3">There are many things I like to do, to see, and to experience.
                I like to read, I like to write; I like to think, I like to dream;
                I like to talk, I like to listen.
                </p>
                @endif


              </div>


              <!--informacion personal-->
              <div class="detalles bg-black  noe-black text-white py-3 px-4 col-lg-5 usuario_col">
                <h4 class="titulos-medio px-3">Informacion Personal </h4>
                <!--lista con mail, sexo, fecha de nacimiento y link a wishlist-->
                <div class="row pt-3">
                  <div class="col-12 row p-2">
                    <h5 class="col-md-4 texto-parrafo px-4">
                      <strong>Email</strong>
                    </h5>
                    <p class="col-md-8 texto-parrafo px-4">{{$datos->email}}</p>
                  </div>
                  <div class="col-12 row p-2">
                    <h5 class="col-md-4 texto-parrafo px-4">
                      <strong>DNI</strong>
                    </h5>
                    @if( auth()->user()->dni !=null)
                        <p class="col-md-8 texto-parrafo px-4">{{$datos->dni}}</p>

                    @else

                    <p class="col-md-8 texto-parrafo px-4">...</p>

                    @endif

                  </div>
                  <div class="col-12 row p-2">
                    <h5 class="col-md-4 texto-parrafo px-4">
                      <strong>Fecha de Nacimiento</strong>
                    </h5>

                    @if( auth()->user()->dni !=null)
                        <p class="col-md-8 texto-parrafo px-4">{{ $datos->date_birth}}</p>

                    @else

                    <p class="col-md-8 texto-parrafo px-4">...</p>

                    @endif

                  </div>
                  <div class="col-12 row p-2">
                    <h5 class="col-md-4 texto-parrafo px-4">
                      <strong>Wishlist</strong>
                    </h5>
                    <a href="carrito.php#nav-guardados-tab" class="col-md-8 texto-parrafo px-4 text-white wishlist">
                      Lista de deseos
                    </a>
                  </div>


                </div>
              </div>
            </div>

          </div>

          <div class="col-xs-12">
    <div class="center-block"align="center">

        <a href="{{route('user.editar',$datos)}}" class="btn btn-warning btn-sm">Editar datos</a>
    </div>
</div>


        </main>





@endsection
