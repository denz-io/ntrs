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
