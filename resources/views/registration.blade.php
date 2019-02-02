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
                            <form id="reg-form" method="POST" action="/registration" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12" style="text-align:center;">
                                            <img class="profile" id="user_image" src="{{asset('images/profile_default.jpg')}}">

                                            <input style="display: none;" accept="image/*" type="file" name="profile" id="profile_input">
                                            <button type="button" class="btn btn-success custom-button" id="snap"><i class="fa fa-upload fa-lg"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="type" class="form-control form-custom-select" id="register-type">
                                        <option selected disabled>Select Vehicle Type</option>
                                        <option>Sikad-sikad</option>
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
                                    <input type="hidden" id="operator" name="operator" required> 
                                    <input type="text" onBlur="SetFormatedText(event)" onKeyup="FirstLetterToUpper(event)" class="form-control form-custom" id="last_name" placeholder="(Last Name)" required> 
                                </div>
                                <div class="form-group">
                                    <input type="text"  onBlur="SetFormatedText(event)" onKeyup="FirstLetterToUpper(event)" class="form-control form-custom" id="first_name" id="first_name" placeholder="(First Name)" required> 
                                </div>
                                <div class="form-group">
                                    <input type="text"  onBlur="SetFormatedText(event)" onKeyup="FirstLetterToUpper(event)" class="form-control form-custom" id="middle_name" id="middle_name" placeholder="(Middle Name)" required> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-custom" name="contact" placeholder="Contact Number" maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                                </div>
                                <div class="form-group">
                                    <select name="address" class="form-control form-custom-select">
                                        <option selected disabled>Select Address</option>
                                        @foreach ($brgy as $item )
                                            <option>{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control form-custom" value="0" id="units" name="units" placeholder="Number of Units" required>
                                </div>
                                <div class="form-group">
                                    <div id="bodynumber">
                                    </div>
                                    <input type="hidden" class="form-control form-custom" id="body_number" name="body_number" placeholder="Body Number" required>
                                </div>
                                <div class="form-group">
                                    <div id="stickernumber">
                                    </div>
                                    <input type="hidden" class="form-control form-custom" id="sticker_number" name="sticker_number" placeholder="Body Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-custom" name="or_number" placeholder="O.R. Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-custom" id="amount_paid" name="amount_paid" placeholder="Amount Paid" required>
                                </div>
                                <div class="to-center">
                                    <button type="submit" data-toggle="tooltip" title="Upload image to enable button." id="register-submit" class="btn btn-success custom-button" >
                                        <i class="fa fa-floppy-o fa-lg"></i> Register
                                    </button>
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
