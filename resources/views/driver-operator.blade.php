@extends('layout.print')
@section('title')
    Print
@endsection
@section('css')
    <link href="{{ asset('css/operator-printing.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div id="to-print"></div>
@endsection
@section('js')
    <script>
        var image_url = '{{ URL::asset('/') }}';
    </script>
    <script src="{{asset('js/operator-printing.js')}}"></script>
@endsection
