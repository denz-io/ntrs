$(document).ready(function() {
    $('#assoc-table').DataTable( {
        "scrollX": true,
    } );
});


function deleteAssoc(id) {
    if (confirm('Delete this Item?')) {
        window.location = '/association/delete/' + id;
    }
}

