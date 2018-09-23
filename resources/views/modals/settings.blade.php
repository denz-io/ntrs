<div class="modal fade" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-cogs fa-lg"></i> My Settings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/manage-users/update" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" id="id" name="id" required>
                <input type="text" class="form-control form-custom" value="{{Auth::user()->fname}}" name="fname" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" value="{{Auth::user()->lname}}" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" value="{{Auth::user()->username}}" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-custom" name="password" placeholder="Password" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Update Info</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
