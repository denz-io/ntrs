$(document).ready(function() {
    $('#route-table').DataTable( {
        "scrollX": true,
    } );
});

function deleteRouet(id)
{
    if (confirm('Delete this Item?')) {
        window.location = '/route/delete/' + id;
    }
}
