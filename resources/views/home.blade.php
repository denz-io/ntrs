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
            <div class="card">
                <div class="card-header">
                   <i class="fa fa-address-card fa-lg"> Operators</i> 
                   <button  onClick="printItems('operator')" class="btn btn-success to-right"><i class="fa fa-print fa-lg"></i> Print</button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
                </div>
                <div class="card-body">
		    <table id="home-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Control Number</th>
				<th>Name</th>
				<th>Type</th>
				<th>Association</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($operators as $operator)
                                <tr>
                                    <td style="text-align: center;"><input data-id="{{$operator->id}}" id="check_{{$operator->id}}" class="to_check" onChange="setItems({{$operator->id}})" type="checkbox" autocomplete="off"></td>
                                    <td>{{$operator->control_number}}</td>
                                    <td>{{$operator->operator}}</td>
                                    <td>{{$operator->type}}</td>
                                    <td>{{$operator->association}}</td>
                                    <td>
                                        <a href="{{'/operator/' . $operator->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> More</a>
                                       <a href="#" onClick="deleteOperator({{$operator->id}})" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i> Delete</a> 
                                    </td>
                                </tr>
                            @endforeach
			<tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
