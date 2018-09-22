@extends('layout.main')
@section('title')
    Registration
@endsection
@section('css')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layout.dashboard-panel')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-plus fa-lg"> Registration Form</i> 
                </div>
                <div class="card-body">
		    <div class="row justify-content-center">
		        <div class="col-md-10 login-form-padding">
                            <form method="POST" action="/registration">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12" style="text-align:center;">
                                            <img style="display: none;" id="user_image" src="{{asset('images/profile_default.jpg')}}">

                                            <canvas class="profile" id="image_canvas">
                                            </canvas>

                                            <input type="hidden" id="profile" name="profile" required>
                                            <input style="display: none;" type="file" id="profile_input" >
                                            <button type="button" class="btn btn-success custom-button" id="snap"><i class="fa fa-camera fa-lg"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="type" class="form-control form-custom-select" id="register-type">
                                        <option selected>Sikad-sikad</option>
                                        <option>Tricycle</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="association" class="form-control form-custom-select" id="drop-sikad">
                                        @foreach ($assoc as $as )
                                            @if($as->type == 'Sikad-sikad')
                                                <option>{{$as->name_short}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <select name="association" class="form-control form-custom-select" id="drop-tricycle">
                                        @foreach ($assoc as $as )
                                            @if($as->type == 'Tricycle')
                                                <option>{{$as->name_short}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="operator" placeholder="(family,given,middle name)" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="address" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="body_number" placeholder="Body Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" id="units" name="units" placeholder="Number of Units" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="or_number" placeholder="O.R. Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="control_number" placeholder="Control Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" id="amount_paid" name="amount_paid" placeholder="Amount Paid" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="contact" placeholder="Contact Number" required>
                                </div>
                                <div class="to-center">
                                    <button type="submit" id="register-submit" class="btn btn-primary custom-button"><i class="fa fa-floppy-o fa-lg"></i> Register</button>
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
    <script src=" {{ asset('js/registration.js')}}"> </script>
@endsection
