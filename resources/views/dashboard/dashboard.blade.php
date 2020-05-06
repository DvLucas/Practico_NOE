@extends('layouts.master_dashboard')

@section('title') 
    Panel de Control
@endsection


@section('content')

    <main class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-2 text-left bg-dark pt-3 nav-dash">
                @include('dashboard.includes.nav_dashboard')
            </div> <!-- Nav Panel de Control -->
            
            <div class="col-12 col-lg-10">
                <div class="row justify-content-center">
                    @yield('product')
                </div>
            </div>

        </div>

    </main>


@endsection