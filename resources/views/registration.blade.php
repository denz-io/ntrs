@extends('layout.main')
@section('title')
    Registration
@endsection
@section('css')
@endsection
@section('content')
    <div class="row justify-content-center">
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
                                        <div class="col-md-12" >
                                            <video style="margin-left: 156px;" id="video" width="300" height="300" autoplay></video>
                                            <canvas style="margin-left: 156px; margin-top: 34px;" class="hidden" id="canvas" width="300" height="250"></canvas>
                                        </div>
                                        <div class="col-md-12" style="text-align:center;">
                                            <button type="button" class="btn btn-success custom-button" id="snap"><i class="fa fa-camera fa-lg"></i></button>
                                            <input type="hidden" id="profile" name="profile" required>
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
                                        <option>NAVPEDA</option>
                                        <option>NASSIDA</option>
                                        <option>NATRIDA</option>
                                    </select>
                                    <select name="association" class="form-control form-custom-select" id="drop-tricycle">
                                        <option>NABILTODA</option>
                                        <option>NABILTODA(BLISS)</option>
                                        <option>NATODA</option>
                                        <option>ATRODA</option>
                                        <option>CARNATODA</option>
                                        <option>NANTA</option>
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
                                    <button type="submit" class="btn btn-primary custom-button"><i class="fa fa-floppy-o fa-lg"></i> Register</button>
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
    <script src=" {{ asset('js/photo.js')}}"> </script>
@endsection
