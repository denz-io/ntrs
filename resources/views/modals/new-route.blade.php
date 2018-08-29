<div class="modal fade" id="route-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-square fa-lg"></i> Register Route</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/route" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" name="assoc_id" value="{{$assoc->id}}" required>
                <input type="text" class="form-control form-custom" name="route" placeholder="Route" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="rate" placeholder="Rate" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="rate_discounted" placeholder="Rate (with discount)" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Register Route</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
