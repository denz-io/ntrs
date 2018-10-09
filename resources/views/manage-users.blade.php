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
                   <i class="fa fa-plus fa-lg"></i> Manage Users 
                   @if(Auth::user()->is_admin == 2)
                       <button class="btn btn-success to-right" data-toggle="modal" data-target="#users-modal" >
                            <i class="fa fa-plus fa-lg"></i> Create Account 
                       </button> 
                   @endif
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
               </div>
                <div class="card-body">
		    <table id="manage-admin-table" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Is Admin</th>
                                @if(Auth::user()->is_admin == 2)
                                    <th>Option</th>
				@endif
			    </tr>
			</thead>
			    @foreach($users as $user)
                                <tr>
                                    <td>{{$user->fname}}</td>
                                    <td>{{$user->lname}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->is_admin ? 'Yes' : 'No'}}</td>
                                    @if(Auth::user()->is_admin == 2)
                                        <td>
                                            <a href="#" data-id="{{$user->id}}" data-fname="{{$user->fname}}" data-lname="{{$user->lname}}" data-is_admin="{{$user->is_admin}}" data-username="{{$user->username}}" data-toggle="modal" data-target="#users-update-modal" class="btn btn-success custom-button-table"><i class="fa fa-pencil-square-o"></i> Update</a>
                                            <a onClick="deleteDelete({{$user->id}})" href="#" class="btn btn-danger custom-button-table"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
			<tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
    @include('modals.update-users')
    @include('modals.new-users')
@endsection
@section('js')
    <script src="{{ asset('js/management.js') }}"></script>
@endsection
