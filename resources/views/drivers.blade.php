@extends('layout.main')
@section('title')
    Drivers 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        @include('layout.dashboard-panel')
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                   <i class="fa fa-motorcycle fa-lg"></i> Drivers 
                   <button  onClick="printItems('driver')" class="btn btn-success to-right"><i class="fa fa-print fa-lg"></i> Print</button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
               </div>
                <div class="card-body">
		    <table id="assoc-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Type</th>
				<th>Name</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Sticker No.</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($drivers as $driver)
                                <tr>
                                    <td style="text-align: center;"><input data-id="{{$driver->id}}" id="check_{{$driver->id}}" class="to_check" onChange="setItems({{$driver->id}})" type="checkbox" autocomplete="off"></td>
                                    <td>{{$driver->type}}</td>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->address}}</td>
                                    <td>{{$driver->contact}}</td>
                                    <td>{{$driver->sticker_number}}</td>
                                    <td>
                                        <a href="/view-operator/{{$driver->operator_id}}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> View Operator</a>
                                        @if(Auth::user()->is_admin)
                                            <a onClick="deleteDelete({{$driver->id}})" href="#" class="btn btn-success custom-button-table"><i class="fa fa-trash"></i> Delete</a>
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
    <script src="{{ asset('js/driver.js') }}"></script>
@endsection
