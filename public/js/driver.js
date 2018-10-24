$(document).ready(function() {
    $('#driver-table').DataTable( {
        "scrollX": true,
    } );
});

function deleteAssoc(id) {
    if (confirm('Delete this Item?')) {
        window.location = '/association/delete/' + id;
    }
}

function deleteDelete(id) {
    if (confirm('Delete this Item?')) {
        window.location = '/driver-delete/' + id;
    }
}

