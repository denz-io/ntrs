<div class="modal fade" id="driver-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-square fa-lg"></i> Register Driver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/driver-registration" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" value="{{$operator->id}}" name="operator_id" readonly>
                <input type="text" value="{{$operator->type}}" class="form-control form-custom" name="type" placeholder="Name" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="address" placeholder="Address" required>
            </div>
            <div class="form-group">
                <select name="sticker_number" class="form-control form-custom-select">
                    @foreach ($body_numbers as $body_number )
                        <option>{{$body_number}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="contact" placeholder="Contact" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Register Driver</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
