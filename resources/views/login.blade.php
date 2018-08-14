@extends('layout.main')
@section('title')
    Login
@endsection
@section('css')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <div class="col-md-2">
                            <img class="logo" src="{{ asset('images/Province_of_Biliran_Official_Seal.png') }}">
                        </div>
                        <div class="col-md-8">
                            <div class="login-title">
                            Naval Trisikad Registration System
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img class="logo to-right" src="{{ asset('images/Naval_biliran_seal.png') }}">
                        </div>
                    </div>
                </div>
                <div class="card-body">
		    <div class="row justify-content-center">
		        <div class="col-md-10">
                            <form method="POST" action="/">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form> 
                        </div>	
	            </div>	
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
