@extends('layout.main')
@section('title')
    Associatons 
@endsection
@section('css')
@endsection
@section('content')
    <div class="row row-justified-center">
        <div class="col-md-12">
            <div class="card" style="margin-bottom: 31px;">
               <div class="card-header">
                   <i class="fa fa-info-circle fa-lg"> Operator for {{$operator->type}}</i> 
                   <button  class="btn btn-danger to-right"> <i class="fa fa-trash fa-lg"></i></button> 
               </div>
                <div class="card-body">
                    <div class="row">
                        <div  class="col-md-12" style="margin: auto; text-align:center;">
                            <img src="{{ asset('storage/' . $operator->profile ) }}" class="profile">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="row">
                                    <div  class="col-md-2">
                                        <label for="name">Associaton:</label>
                                    </div>
                                    <div class="col-md-10">
                                        @if($operator->type == 'Sikad-sikad')
                                            <select value="{{$operator->association}}" name="association" class="form-control form-custom-select" id="drop-sikad">
                                                <option>NAVPEDA</option>
                                                <option>NASSIDA</option>
                                                <option>NATRIDA</option>
                                            </select>
                                        @else
                                            <select value="{{$operator->association}}" name="association" class="form-control form-custom-select" id="drop-tricycle">
                                                <option>NABILTODA</option>
                                                <option>NABILTODA(BLISS)</option>
                                                <option>NATODA</option>
                                                <option>ATRODA</option>
                                                <option>CARNATODA</option>
                                                <option>NANTA</option>
                                            </select>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div  class="col-md-2">
                                        <label for="name">Name:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input  value="{{$operator->operator}}" type="text" class="form-control form-custom" name="operator" placeholder="(family,given,middle name)" required>
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
                                    <div  class="col-md-3">
                                        <label for="name">Body Number:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input  value="{{$operator->body_number}}" type="text" class="form-control form-custom" name="body_number" placeholder="Body Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div  class="col-md-2">
                                        <label for="name">Units:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input  value="{{$operator->units}}" type="text" class="form-control form-custom" id="units" name="units" placeholder="Number of Units" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary custom-button"><i class="fa fa-floppy-o fa-lg"></i> Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
               <div class="card-header">
                   <i class="fa fa-motorcycle fa-lg"></i>Drivers 
                   <button data-toggle="modal" data-target="#assoc-modal" class="btn btn-primary to-right">
                       <i class="fa fa-plus fa-lg"></i> Register New Driver 
                   </button>
               </div>
                <div class="card-body">
		    <table id="specific-driver" class="display" style="width:100%">
			<thead>
			    <tr>
				<th>Driver</th>
				<th>Association Head</th>
				<th>Type</th>
			        @if($operator->type != 'Sikad-sikad')
                                    <th>Sticker No.</th>
                                @endif
				<th>Option</th>
			    </tr>
			</thead>
			    @foreach($drivers as $driver)
                                <tr>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->address}}</td>
                                    <td>{{$driver->contact}}</td>
                                    @if($operator->type != Sikad-sikad)
                                        <td>{{$driver->sticker_number}}</td>
                                    @endif
                                    <td><a href="{{'/driver/' . $driver->id }}" class="btn btn-success custom-button-table"><i class="fa fa-info"></i> More</a></td>
                                </tr>
                            @endforeach
			<tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
    @include('modals.new-driver')
@endsection
@section('js')
    <script src="{{ asset('js/operator.js') }}"></script>
@endsection
