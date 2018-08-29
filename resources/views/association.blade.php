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
                   <button data-toggle="modal" data-target="#assoc-modal" class="btn btn-primary to-right"><i class="fa fa-plus fa-lg"></i> Add new Association</button>
               </div>
                <div class="card-body">
		    <table id="assoc-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
				<th>Association</th>
				<th>Association Head</th>
				<th>Type</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($associations as $association)
                                <tr>
                                    <td>{{$association->name_short}}</td>
                                    <td>{{$association->head}}</td>
                                    <td>{{$association->type}}</td>
                                    <td>
                                        <a href="{{'/association/view/' . $association->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> More</a>
                                        <button onClick="deleteAssoc({{$association->id}})" class="btn btn-danger custom-button-table"><i class="fa fa-trash"></i> Delete</button>
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
