@extends('layout.main')
@section('title')
    Operator Information 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        @include('layout.dashboard-panel')
        <div class="col-md-12">
            <div class="card" style="margin-bottom: 31px;">
               <div class="card-header">
                   @if(Auth::user()->is_admin == 2)
                       <i class="fa fa-info-circle fa-lg"> 
                           <label style="color:{{$assoc->association_color}}">{{$assoc->name_short}}</label>
                       </i> 
                       <button onClick="updateAssoc()" type="submit" class="btn btn-success to-right" style="margin-right: 10px;"><i class="fa fa-pencil-square-o fa-lg"></i> Update</button>
                       <button onClick="deleteAssoc({{$assoc->id}})" class="btn btn-danger custom-button-table to-right" style="margin-right: 10px;"><i class="fa fa-trash"></i> Delete</button>
                   @endif
                   <button  onClick="printSingleItem('association', {{$assoc->id}})"  class="btn btn-info to-right" style="margin-right: 10px;"><i class="fa fa-print fa-lg"></i> Print</button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
               </div>
               <form  id="form-assoc" action="/association/update" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Acronym:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input  value="{{$assoc->id}}" type="hidden" name="id" required>
                                            <input class="form-control form-custom" value="{{$assoc->name_short}}" type="text" name="name_short" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Full Title:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control form-custom" value="{{$assoc->name_full}}" type="text" name="name_full" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Contact:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control form-custom" value="{{$assoc->contact}}" type="text" name="contact" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Association Head:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input  value="{{$assoc->association_head}}" type="text" class="form-control form-custom" name="association_head" placeholder="Address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Type:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select name="type" class="form-control form-custom-select">
                                                <option {{$assoc->type == 'Sikad-sikad' ? 'selected="selected"':''}}>Sikad-sikad</option>
                                                <option {{$assoc->type == 'Tricycle' ? 'selected="selected"':''}}>Tricycle</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-3">
                                            <label>Pick Color:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input value="{{$assoc->association_color}}" type="color" class="picker-custom" name="association_color" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
               <div class="card-header">
                   <i class="fa fa-road fa-lg"></i> Routes
                   @if(Auth::user()->is_admin == 2)
                       <button data-toggle="modal" data-target="#route-modal" class="btn btn-success to-right">
                           <i class="fa fa-plus fa-lg"></i> Register New Route
                       </button>
                   @endif
                   <button  onClick="printItems('route')" class="btn btn-info to-right" style="margin-right: 10px;">
                        <i class="fa fa-print fa-lg"></i> Print
                   </button> 
               </div>
                <div class="card-body">
		    <table id="specific-driver" class="display nowrap" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Route Start</th>
				<th>Route End</th>
				<th>Rate</th>
				<th>Rate w/ Discount</th>
                                @if(Auth::user()->is_admin)
                                    <th>Option</th>
				@endif
			    </tr>
			</thead>
			<tbody>
			    @foreach($routes as $route)
			        <tr>
                                <td style="text-align: center;"><input data-id="{{$route->id}}" id="check_{{$route->id}}" class="to_check" onChange="setItems({{$route->id}})" type="checkbox" autocomplete="off"></td>
                                <td>{{$route->route_start}}</td>
                                <td>{{$route->route_end}}</td>
                                <td>{{$route->rate}}</td>
                                <td>{{$route->rate_discounted}}</td>
                                @if(Auth::user()->is_admin)
                                    <td>
                                        <button data-toggle="modal" data-id="{{$route->id}}" data-route_start="{{$route->route_start}}" data-route_end="{{$route->route_end}}" data-rate="{{$route->rate}}" data-rate_discounted="{{$route->rate_discounted}}" data-target="#update-route-modal" class="btn btn-success">
                                            <i class="fa fa-pencil-square-o fa-lg"></i> Update  
                                        </button>
                                        <button onClick="deleteRoute({{$route->id}})" class="btn btn-danger">
                                            <i class="fa fa-trash fa-lg"></i> Delete  
                                        </button>
                                    </td> 
                                @endif
                                </tr> 
                            @endforeach
			</tbody>
		    </table> 
		</div>
            </div>
        </div>
    </div>
    @include('modals.new-route')
    @include('modals.update-route')
@endsection
@section('js')
    <script src="{{ asset('js/assoc.js') }}"></script>
@endsection
