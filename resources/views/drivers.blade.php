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
                   <i class="fa fa-motorcycle fa-lg"></i> Drivers 
               </div>
                <div class="card-body">
		    <table id="assoc-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
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
                                    <td>{{$driver->type}}</td>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->address}}</td>
                                    <td>{{$driver->contact}}</td>
                                    <td>{{$driver->sticker_number}}</td>
                                    <td>
                                        <a href="/operator/{{$driver->operator_id}}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> View Operator</a>
                                        <a onClick="deleteDelete({{$driver->id}})" href="#" class="btn btn-danger custom-button-table"><i class="fa fa-trash"></i> Delete</a>
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
