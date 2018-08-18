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
                                <a class="nav-link" href="/registration">
				    <i class="fa fa-user-plus fa-lg"></i>
                                    Registration 
                                </a>
                            </li>
                            <li class="nav-item custom-nav-link">
                                <a class="nav-link" href="/association">
				    <i class="fa fa-address-book fa-lg"></i>
                                    Associations 
                                </a>
                            </li>
                            <li class="nav-item custom-nav-link">
                                <a class="nav-link" href="/associaton">
				    <i class="fa fa-motorcycle fa-lg"></i>
                                    Drivers 
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
                <div class="card-body">
		    <table id="home-table" class="display" style="width:100%">
			<thead>
			    <tr>
				<th>Control Number</th>
				<th>Name</th>
				<th>Type</th>
				<th>Association</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($operators as $operator)
                                <tr>
                                    <td>{{$operator->control_number}}</td>
                                    <td>{{$operator->operator}}</td>
                                    <td>{{$operator->type}}</td>
                                    <td>{{$operator->association}}</td>
                                    <td><a href="{{'/operator/' . $operator->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> More</a></td>
                                </tr>
                            @endforeach
			<tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
