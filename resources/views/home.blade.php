@extends('layout.main')
@section('title')
    Home 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        <div class="col-md-12" style="padding-bottom: 15px;">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel custom-nav">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item custom-nav-link">
                                <a class="nav-link" href="/sikad-registration">
				    <i class="fa fa-user-plus fa-lg"></i>
                                    Register Sikad-sikad
                                </a>
                            </li>
                            <li class="nav-item custom-nav-link">
                                <a class="nav-link" href="/tricycle-registration">
				    <i class="fa fa-motorcycle fa-lg"></i>
                                    Register Tricycle 
                                </a>
                            </li>
                            <li class="nav-item custom-nav-link">
                                <a class="nav-link" href="/">
				    <i class="fa fa-address-book fa-lg"></i>
                                    Associations 
                                </a>
                            </li>
                        </ul>
			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <i class="fa fa-calendar fa-lg"> <span id="date"></span></i>
                                <i class="fa fa-clock-o fa-lg"> <span id="time"></span></i>
                            </li>
			</ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Global Table</div>
                <div class="card-body">
                    This is the body 
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
