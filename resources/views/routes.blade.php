@extends('layout.main')
@section('title')
    Routes 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        @include('layout.dashboard-panel')
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                   <i class="fa fa-road fa-lg"></i> Routes
                   <button  onClick="printItems('route')" class="btn btn-success to-right"><i class="fa fa-print fa-lg"></i> Print</button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
               </div>
                <div class="card-body">
		    <table id="route-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Route Start</th>
				<th>Route End</th>
				<th>Rate</th>
				<th>Rate w/ Discount</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($routes as $route)
                                <tr>
                                    <td style="text-align: center;"><input data-id="{{$route->id}}" id="check_{{$route->id}}" class="to_check" onChange="setItems({{$route->id}})" type="checkbox" autocomplete="off"></td>
                                    <td>{{$route->route_start}}</td>
                                    <td>{{$route->route_end}}</td>
                                    <td>{{$route->rate}}</td>
                                    <td>{{$route->rate_discounted}}</td>
                                    <td>
                                        <a href="/association/view/{{$route->assoc_id}}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> View Association</a>
                                        @if(Auth::user()->is_admin)
                                            <a href="#" onClick="deleteRouet({{$route->id}})" class="btn btn-success custom-button-table"><i class="fa fa-trash"></i> Delete</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
			<tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
    @include('modals.associaton')
@endsection
@section('js')
    <script src="{{ asset('js/routes.js') }}"></script>
@endsection
