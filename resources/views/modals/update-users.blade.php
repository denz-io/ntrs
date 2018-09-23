<div class="modal fade" id="users-update-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-square fa-lg"></i> Update User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/manage-users/update" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" id="id" name="id" required>
                <input type="text" class="form-control form-custom" id="fname" name="fname" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="lname" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-custom" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="form-control form-custom checkbox">
                    <label><input type="checkbox" id="is_admin" value="1" name="is_admin"> Is Admin</label>
                </div>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Update User</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
