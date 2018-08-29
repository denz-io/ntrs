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
                <div class="card-body">
		    <table id="home-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
				<th>Control Number</th>
				<th>Name</th>
				<th>Type</th>
				<th>Association</th>
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($operators as $operator)
                                <tr>
                                    <td>{{$operator->control_number}}</td>
                                    <td>{{$operator->operator}}</td>
                                    <td>{{$operator->type}}</td>
                                    <td>{{$operator->association}}</td>
                                    <td><a href="{{'/operator/' . $operator->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> More</a></td>
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
