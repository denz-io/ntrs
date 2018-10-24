<div class="modal fade" id="update-route-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-square fa-lg"></i> Register Route</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/route/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" class="form-control form-custom" id="id" name="id" placeholder="Route" required>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="route_start" name="route_start" placeholder="Route Start" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="route_end" name="route_end" placeholder="Route End" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="rate" name="rate" placeholder="Rate" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="rate_discounted" name="rate_discounted" placeholder="Rate (with discount)" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Update Route</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
