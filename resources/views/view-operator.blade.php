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
                   <i class="fa fa-info-circle fa-lg"> {{$operator->type}} Operator </i> 
                   <button  onClick="deleteOperator({{$operator->id}})" class="btn btn-danger to-right"><i class="fa fa-trash fa-lg"></i> Delete</button> 
                   <button onClick="updateOperator()" type="submit" class="btn btn-primary to-right" style="margin-right: 10px;"><i class="fa fa-pencil-square-o fa-lg"></i> Update</button>
                   <button  onClick="printSingleItem('operator', {{$operator->id}})"  class="btn btn-success to-right" style="margin-right: 10px;"><i class="fa fa-print fa-lg"></i> Print</button> 
                   <input id="csrf_token" type="hidden" value="{{ csrf_token() }}">
               </div>
               <form  id="form-operator" action="/operator" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-12" style="margin: auto; text-align:center;">
                                            <img src="{{ asset('storage/' . $operator->profile ) }}" class="act_profile">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Name:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input  value="{{$operator->id}}" type="hidden" name="id" required>
                                            <input  value="{{$operator->type}}" type="hidden" name="type" required>
                                            <input  value="{{$operator->operator}}" type="text" class="form-control form-custom" name="operator" placeholder="(family,given,middle name)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Associaton:</label>
                                        </div>
                                        <div class="col-md-10">
                                            @if($operator->type == 'Sikad-sikad')
                                                <select value="{{$operator->association}}" name="association" class="form-control form-custom-select" id="drop-sikad">
                                                    @foreach ($assoc as $as )
                                                        @if($as->type == 'Sikad-sikad')
                                                            <option>{{$as->name_short}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            @else
                                                <select value="{{$operator->association}}" name="association" class="form-control form-custom-select" id="drop-tricycle">
                                                    @foreach ($assoc as $as )
                                                        @if($as->type == 'Sikad-sikad')
                                                            <option>{{$as->name_short}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Address:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input  value="{{$operator->address}}" type="text" class="form-control form-custom" name="address" placeholder="Address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <label for="name">Body Number:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input  value="{{$operator->body_number}}" type="text" class="form-control form-custom" name="body_number" placeholder="Body Number" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-3">
                                            <label for="name">Units:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input  value="{{$operator->units}}" type="text" class="form-control form-custom" id="units" name="units" placeholder="Number of Units" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-3">
                                            <label for="name">O.R. Number:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input  value="{{$operator->or_number}}" type="text" class="form-control form-custom" name="or_number" placeholder="O.R. Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-3">
                                            <label for="name">Control Number:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input  value="{{$operator->control_number}}" type="text" class="form-control form-custom" name="control_number" placeholder="Control Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-3">
                                            <label for="name">Amount paid:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input  value="{{$operator->amount_paid}}" type="text" class="form-control form-custom" id="amount_paid" name="amount_paid" placeholder="Amount Paid" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div  class="col-md-3">
                                            <label for="name">Contact Number:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input  value="{{$operator->contact}}" type="text" class="form-control form-custom" name="contact" placeholder="Contact Number" required>
                                        </div>
                                    </div>
                                </div>
                                @if($operator->sticker_number)
                                    <div class="form-group">
                                        <div class="row">
                                            <div  class="col-md-3">
                                                <label for="name">Sticker Number:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input  value="{{$operator->sticker_number}}" type="text" class="form-control form-custom" name="contact" placeholder="Contact Number" required>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
               <div class="card-header">
                   <i class="fa fa-motorcycle fa-lg"></i> Drivers 
                   <button data-toggle="modal" data-target="#driver-modal" class="btn btn-primary to-right">
                       <i class="fa fa-plus fa-lg"></i> Register New Driver 
                   </button>
                   <button  onClick="printItems('driver')" class="btn btn-success to-right" style="margin-right: 10px">
                        <i class="fa fa-print fa-lg"></i> Print
                   </button> 
               </div>
                <div class="card-body">
		    <table id="specific-driver" class="display" style="width:100%">
			<thead>
			    <tr>
                                <th style="text-align: center;">All <input type="checkbox" id="print_all" autocomplete="off" style="vertical-align: middle !important;"></th>
				<th>Driver</th>
				<th>Address</th>
				<th>Contact</th>
			        @if($operator->type == 'Tricycle')
                                    <th>Sticker No.</th>
                                @endif
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($drivers as $driver)
                                <tr>
                                    <td style="text-align: center;"><input data-id="{{$driver->id}}" id="check_{{$driver->id}}" class="to_check" onChange="setItems({{$driver->id}})" type="checkbox" autocomplete="off"></td>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->address}}</td>
                                    <td>{{$driver->contact}}</td>
                                    @if($operator->type == 'Tricycle')
                                        <td>{{$driver->sticker_number}}</td>
                                    @endif
                                    <td>
                                        <button data-id="{{$driver->id}}" data-sticker_number="{{$driver->sticker_number}}" data-contact="{{$driver->contact}}" data-address="{{$driver->address}}" data-name="{{$driver->name}}" data-toggle="modal" data-target="#update-driver-modal" class="btn btn-primary custom-button-table"><i class="fa fa-pencil-square-o"></i> Update</button>
                                        <button onClick="deleteDriver({{ $driver->id}})" class="btn btn-danger custom-button-table"><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
			<tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
    @include('modals.new-driver')
    @include('modals.update-driver')
@endsection
@section('js')
    <script src="{{ asset('js/operator.js') }}"></script>
@endsection
