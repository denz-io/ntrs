$(document).ready(function() {
    $('#home-table').DataTable( {
        "scrollX": true
    } );
});

deleteOperator = (id) => {
    if (confirm("Do you want to delete this record?")) {
        window.location = '/view-operator/delete/' + id;
    }
}

deactivateAll = () => {
    if (confirm("Do you want to deactivate all accounts?")) {
        window.location = '/operator-deactivate';
    }
}

activateAll = () => {
    if (confirm("Do you want to activate all accounts?")) {
        window.location = '/operator-activate';
    }
}
