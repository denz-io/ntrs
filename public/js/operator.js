$(document).ready(function() {
    $('#specific-driver').DataTable( {
        "scrollX": true,
    } );
});

function deleteOperator(id) {
    if (confirm("Do you want to delete this record?")) {
        window.location = '/operator/delete/' + id;
    }
}

function updateOperator() {
    if (confirm("Update this record?")) {
        $('#form-operator').submit();
    }
}

function deleteDriver(id) {
    if (confirm("Do you want to delete this record?")) {
        window.location = '/driver-registration/delete/' + id;
    }
}

$("#update-driver-modal").on('shown.bs.modal', function(event){
  $(this).find('#id').val($(event.relatedTarget).data('id'))
  $(this).find('#name').val($(event.relatedTarget).data('name'))
  $(this).find('#address').val($(event.relatedTarget).data('address'))
  $(this).find('#contact').val($(event.relatedTarget).data('contact'))
  $(this).find('#sticker_number').val($(event.relatedTarget).data('sticker_number'))
});


$('#act_profile').click(() => {
    $('#profile').trigger('click');
});

$('#profile').on('change', function(event) {
  console.log('this is being called');
  var selectedFile = event.target.files[0];
  var reader = new FileReader();

  var imgtag = document.getElementById("act_profile");
  imgtag.title = selectedFile.name;

  reader.onload = function(event) {
    imgtag.src = event.target.result;
  };

  reader.readAsDataURL(selectedFile);
});
