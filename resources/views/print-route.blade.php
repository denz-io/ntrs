@extends('layout.print')
@section('title')
    Print
@endsection
@section('css')
    <link href="{{ asset('css/route-printing.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div id="to-print"></div>
@endsection
@section('js')
    <script>
        var image_url = '{{ URL::asset('/') }}';
    </script>
    <script src="{{asset('js/route-printing.js')}}"></script>
@endsection
