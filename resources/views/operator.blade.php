@extends('layout.main')
@section('title')
    Operator 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        @include('layout.dashboard-panel')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <i class="fa fa-male fa-lg"> Operator</i> 
                   @if(Auth::user()->is_admin == 2)
                       <button  onClick="deactivateAll()" class="btn btn-warning to-right" style="margin-left: 10px;">
                           <i class="fa fa-thumbs-down fa-lg"></i>
                           Deactivate all accounts
                       </button> 
                       <button  onClick="activateAll()" class="btn btn-success to-right" style="margin-left: 10px;">
                           <i class="fa fa-thumbs-up fa-lg"></i>
                           Activate all accounts
                       </button> 
                   @endif
                   <button  onClick="printItems('operator')" class="btn btn-info to-right"><i class="fa fa-print fa-lg"></i> Print</button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
                </div>
                <div class="card-body">
		    <table id="home-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Name</th>
				<th>Type</th>
				<th>Association</th>
				<th>Status</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($operators as $operator)
                                <tr>
                                    <td style="text-align: center;"><input data-id="{{$operator->id}}" id="check_{{$operator->id}}" class="to_check" onChange="setItems({{$operator->id}})" type="checkbox" autocomplete="off"></td>
                                    <td>{{$operator->operator}}</td>
                                    <td>{{$operator->type}}</td>
                                    @foreach($assoc as $ass)
                                        @if($ass->name_short == $operator->association)
                                            <td style="color: {{$ass->association_color}};">
                                                <strong>{{$operator->association}}</strong>
                                            </td>
                                        @endif
                                    @endforeach
                                    <td>
                                        @if($operator->is_active)
                                            <strong style="color: green">Active<strong> 
                                        @else
                                            <strong style="color: red">Inactive<strong> 
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{'/view-operator/' . $operator->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> View</a>
                                        @if(Auth::user()->is_admin)
                                            <a href="#" onClick="deleteOperator({{$operator->id}})" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i> Delete</a> 
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
@endsection
@section('js')
    <script src="{{ asset('js/operator.js') }}"></script>
@endsection
