<div class="modal fade" id="operator-unit-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-square fa-lg"></i> Update Unit Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      @if(Auth::user()->is_admin)
          <button onClick=addNumberContainer() type="button" class="btn btn-success to-right">
              <i class="fa fa-plus fa-lg"></i>
          </button>
      @endif
      <div id="main_number_container" style="padding-top: 10px;">
          @foreach($sticker_numbers as $key => $sticker_number)
              @if(!Auth::user()->is_admin)
                  {{$key + 1}})
              @endif
              <div class="form-group number_contianer" >
                  @if(Auth::user()->is_admin)
                      <button onClick="removeInput(event)" type="button" class="btn btn-success" style="margin: 0px 0px 10px 0px;">
                          <i class="fa fa-ban fa-lg"></i>
                      </button>
                  @endif
                  <div style="padding-top: 5px;">
                      Stickers Number:
                      <input type="text" class="form-control form-custom" value="{{$sticker_number}}" placeholder="Sticker Number" required>
                      Body Number:
                      <input type="text" class="form-control form-custom" value="{{$body_numbers[$key]}}" placeholder="Body Number" required>
                  </div>
              </div>
          @endforeach
      </div>
      <div class="form-group" style="text-align: center;">
          <button class="btn btn-success custom-button-radius" onClick="updateNumbers({{$operator->id}})" href="#">Update</button>
      </div>
      </div>
    </div>
  </div>
</div>
