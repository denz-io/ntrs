<div class="modal fade" id="update-driver-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil-square-o fa-lg"></i> Update Driver Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/driver-registration/update" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" id="id" name="id" placeholder="Name" readonly>
                <input type="text" class="form-control form-custom" value="{{$operator->type}}" name="type" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="address" name="address" placeholder="Address" required>
            </div>
            @if($operator->type == 'Tricycle')
                <div class="form-group">
                    <input type="text" class="form-control form-custom" id="sticker_number" name="sticker_number" placeholder="Sticker Number" required>
                </div>
            @endif
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="contact" name="contact" placeholder="Contact" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Update Info</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
