<div class="modal fade" id="assoc-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-square fa-lg"></i> Create Associaton</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="/association" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="name_short" placeholder="Acronym" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="name_full" placeholder="Full name of Associaton" required>
            </div>
            <div class="form-group">
                <select name="type" class="form-control form-custom-select" id="register-type">
                    <option selected>Sikad-sikad</option>
                    <option>Tricycle</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="head" placeholder="Head of Associaton" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-custom" name="contact" placeholder="Contact" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-success custom-button-radius" type="submit" href="#">Create Association</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
