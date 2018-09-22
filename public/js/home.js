$(document).ready(function() {
    $('#home-table').DataTable( {
        "scrollX": true
    } );
});

function deleteOperator(id) {
    if (confirm("Do you want to delete this record?")) {
        window.location = '/operator/delete/' + id;
    }
}
