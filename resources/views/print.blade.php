@extends('layout.print')
@section('title')
    Print
@endsection
``` <style>
        .print-main {
            padding-top: 40px; 
            padding-bottom: 20px;
            margin: auto;
        }

        .act_profile {
            width: 200px;
            height: 200px;
        }

        .logo { 
            width: 50px;  
            margin-right: 10px; 
        }

        .to-right { 
            float: right; 
        }

        .login-title { 
            text-align: center; 
            padding-top: 15px; 
        }

        .form-group-profile {
            margin-top: 20px;
            padding-left: 130px;
            padding-top: 100px;
            font-size: 20px;
            border-top: solid 3px silver;
        }

        .info-user {
            padding-left: 10px;
            margin-bottom: 20px;
            border: solid 3px silver; 
            border-radius: 10px;
            vertical-align: middle;;
        }

        @media print {
            .print-break {
                page-break-after: always;
            }
        }
    </style>
@section('css')
@endsection
@section('content')
    <div id="to-print"></div>
@endsection
@section('js')
    <script>
        var image_url = '{{ URL::asset('/') }}';
    </script>
    <script src="{{asset('js/readyprinting.js')}}"></script>
@endsection
