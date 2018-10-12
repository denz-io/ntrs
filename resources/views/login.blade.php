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
		        <div class="col-md-10 login-form-padding">
                            <form method="POST" action="/">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-custom" name="password" placeholder="Password" required>
                                </div>
                                <div class="to-center">
                                    <button type="submit" class="btn btn-success custom-button">Login</button>
                                </div>
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
