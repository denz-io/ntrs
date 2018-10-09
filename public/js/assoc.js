$(document).ready(function() {
    $('#assoc-table').DataTable( {
        "scrollX": true,
    } );

    $('#specific-driver').DataTable( {
        "scrollX": true,
    } );
});


function deleteAssoc(id) {
    if (confirm('Delete this Item?')) {
        window.location = '/association/delete/' + id;
    }
}


function updateAssoc() {
    if (confirm('Update this information?')) {
        $('#form-assoc').submit();
    }
}

function deleteRoute(id) {
    if (confirm('Delete this route?')) {
        window.location = '/route/delete/' + id;
    }
}

$("#update-route-modal").on('shown.bs.modal', function(event){
  $(this).find('#id').val($(event.relatedTarget).data('id'))
  $(this).find('#route_start').val($(event.relatedTarget).data('route_start'))
  $(this).find('#route_end').val($(event.relatedTarget).data('route_end'))
  $(this).find('#rate').val($(event.relatedTarget).data('rate'))
  $(this).find('#rate_discounted').val($(event.relatedTarget).data('rate_discounted'))
});
