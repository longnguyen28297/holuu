@extends('layouts.master')
@section('content')
<!-- main -->
    <main>
        <div class="container">
            <div class="row">
                @yield('home')

                @include('layouts.bannerright')
                
                <!-- back to top -->
                <div class="back-to-top"><i class="fas fa-arrow-up"></i></div>
            </div>
        </div>
    </main>

    <!-- footer -->
<!--Footer Start-->
@endsection