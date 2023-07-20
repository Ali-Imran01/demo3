@extends('layout.master2')

{{-- @push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush --}}

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="home">
        <div class="" style="background: rgb(21,91,255); background: linear-gradient(135deg, rgba(21,91,255,1) 0%, rgba(82,179,255,1) 40%, rgba(0,212,255,1) 100%);">
            <div class="row d-flex justify-content-start p-4">
                <div class="col-6">
                    <div class="row">
                        <span class="col-12 h1 font-weight-bold text-dark">
                            title 1
                        </span>
                        <span class="col-12 h4 font-weight-bold text-dark">
                            title 2
                        </span>
                        <span class="col-12 h4 font-weight-bold text-dark">
                            title 3
                        </span>
                        <a href="#" class="btn"></a>    
                    </div>
                </div>
                <div class="col-6">
                    <div class="" id="logo">
                        <div class="card">
                            <div class="card-body shadow">
                                <img src="{{ asset('image/padurusFull.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- @push('plugin-scripts')
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush --}}

{{-- @push('custom-scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush --}}
