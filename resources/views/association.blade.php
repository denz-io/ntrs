@extends('layout.main')
@section('title')
    Associatons 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        @include('layout.dashboard-panel')
        <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                   <i class="fa fa-users fa-lg"></i> Associations 
                   @if(Auth::user()->is_admin == 2)
                       <button data-toggle="modal" data-target="#assoc-modal" class="btn btn-success to-right">
                           <i class="fa fa-plus fa-lg"></i> 
                           Add new Association
                       </button>
                   @endif
                   <button  onClick="printItems('association')" class="btn btn-success to-right" style="margin-right: 10px;">
                       <i class="fa fa-print fa-lg"></i> 
                       Print
                   </button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
               </div>
                <div class="card-body">
		    <table id="assoc-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Association</th>
				<th>Association Head</th>
				<th>Type</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($associations as $association)
                                <tr>
                                    <td style="text-align: center;"><input data-id="{{$association->id}}" id="check_{{$association->id}}" class="to_check" onChange="setItems({{$association->id}})" type="checkbox" autocomplete="off"></td>
                                    <td style="color: {{$association->color}}">
                                        <strong>
                                            {{$association->name_short}}
                                        </strong>
                                    </td>
                                    <td>{{$association->head}}</td>
                                    <td>{{$association->type}}</td>
                                    <td>
                                        <a href="{{'/association/view/' . $association->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> More</a>
                                        @if(Auth::user()->is_admin)
                                            <button onClick="deleteAssoc({{$association->id}})" class="btn btn-success custom-button-table"><i class="fa fa-trash"></i> Delete</button>
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
    <script src="{{ asset('js/assoc.js') }}"></script>
@endsection
