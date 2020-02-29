@extends('layouts.master')

@section('title') 
    Panel de Control
@endsection


@section('content')

    <main class="container-fluid">

        <div class="row">

            <div class="col-12 col-lg-2 text-left bg-dark pt-3 min-vh-100">
                @include('dashboard.includes.nav_dashboard')
            </div> <!-- Nav Panel de Control -->
            
            <div class="col-10">
                <div class="row">
                    <div class="col-12">
asd
                    </div>
                    <div class="col-12 mt-2">
                        @yield('product')
                    </div>

                </div>

            </div>

        </div>

    </main>


@endsection