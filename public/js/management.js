$(document).ready(function() {
    $('#manage-admin-table').DataTable( {
        "scrollX": true,
    } );
});

function deleteDelete(id) {
    if (confirm('Delete this Item?')) {
        window.location = '/manage-users/delete/' + id;
    }
}

$("#users-update-modal").on('shown.bs.modal', function(event){
  $(this).find('#id').val($(event.relatedTarget).data('id'))
  $(this).find('#fname').val($(event.relatedTarget).data('fname'))
  $(this).find('#lname').val($(event.relatedTarget).data('lname'))
  $(this).find('#username').val($(event.relatedTarget).data('username'))
  console.log($(event.relatedTarget).data('is_admin'));
  $(this).find('#is_admin').prop('checked', $(event.relatedTarget).data('is_admin') ? true : false);
});
