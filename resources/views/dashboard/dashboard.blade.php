@extends('layouts.master')

@section('title') 
    Panel de Control
@endsection


@section('content')

    <main class="container-fluid">

        <div class="row">

            <div class="col-12 col-lg-2 text-left bg-dark pt-3 min-vh-100">

                <h4 class="my-2 text-white">Panel de Control</h4>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="Panel.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Galeria Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Usuarios</a>
                    </li>
                </ul>

            </div> <!-- Nav Panel de Control -->
            
        </div>

    </main>


@endsection