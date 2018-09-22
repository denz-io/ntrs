@extends('layout.main')
@section('title')
    Home 
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
                    <i class="fa fa-envelope fa-lg"> SMS Provider</i> 
                </div>
                <form method="POST" action="/sms">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <textarea name="message" rows="10" cols="50" style="margin-bottom: 20px;" placeholder="Enter Message" required></textarea> 
                        </div>
                        <div class="row justify-content-center">
                             <input type="text" name="number" placeholder="Phone number">
                        </div>	
                        <div class="row justify-content-center">
                             <span>
                                 To message an individual enter a number.
                             </span>
                        </div>	
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-envelope fa-lg"></i> Send SMS</button>
                        </div>	
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
