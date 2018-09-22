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
                   <i class="fa fa-road fa-lg"></i> Routes
               </div>
                <div class="card-body">
		    <table id="route-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
				<th>Description</th>
				<th>Rate</th>
				<th>Rate w/ Discount</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($routes as $route)
                                <tr>
                                    <td>{{$route->route}}</td>
                                    <td>{{$route->rate}}</td>
                                    <td>{{$route->rate_discounted}}</td>
                                    <td>
                                        <a href="/association/view/{{$route->assoc_id}}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> View Association</a>
                                        <a href="#" onClick="deleteRouet({{$route->id}})" class="btn btn-danger custom-button-table"><i class="fa fa-trash"></i> Delete</a>
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
