@extends('layout.main')
@section('title')
    Home 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        @include('layout.dashboard-panel')
        <div class="col-md-12">
            <div class="home-label">
                NTRS
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
