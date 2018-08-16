@extends('layout.main')
@section('title')
    Login
@endsection
@section('css')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-plus fa-lg"> Sikad-sikad Registration Form</i> 
                </div>
                <div class="card-body">
		    <div class="row justify-content-center">
		        <div class="col-md-10 login-form-padding">
                            <form method="POST" action="/sikad-registration">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12" >
                                            <video style="margin-left: 156px;" id="video" width="300" height="300" autoplay></video>
                                            <canvas style="margin-left: 156px; margin-top: 34px;" class="hidden" id="canvas" width="300" height="250"></canvas>
                                        </div>
                                        <div class="col-md-12" style="text-align:center;">
                                            <button type="button" class="btn btn-success" id="snap">Snap Photo</button>
                                            <input type="hidden" id="profile" name="profile" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="association" class="form-control form-custom-select" id="inlineFormCustomSelect">
                                        <option val="NAVPEDA" >NAVPEDA</option>
                                        <option val="NASSIDA" >NASSIDA</option>
                                        <option val="NATRIDA" >NATRIDA</option>
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
                                    <input type="text" class="form-control form-custom" name="units" placeholder="Number of Units" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="or_number" placeholder="O.R. Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="control_number" placeholder="Control Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="amount_paid" placeholder="Amount Paid" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="contact" placeholder="Contact Number" required>
                                </div>
                                <div class="to-center">
                                    <button type="submit" class="btn btn-primary custom-button">Register</button>
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
    <script src=" {{ asset('js/photo.js')}}"> </script>
@endsection
