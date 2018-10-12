var toPrint = [];

setItems = id => {
    if ($('#check_'+ id).prop('checked')) {
        toPrint.push(id);
    } else {
        removeItem(id);
    }
}

removeItem = id => {
    $.each(toPrint, (key, value) => {
        if (id == value) {
            toPrint.splice(key,1);
        }
    })
}

printItems = type => {
    let table_input = $('.dataTables_filter').children()[0].childNodes[1];

    if ($(table_input).val()) {
        confirm(`Print records related to search query?`) ? printItemsBasedQuery(type, $(table_input).val()) : null;
    } else if( $('#print_all').prop('checked')) {
        confirm(`Print all ${type}s?`) ? printAllItems(type) : null;
    } else {
        if (toPrint.length > 0) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("#csrf_token").val()
                }
            });
            $.post("/print", { 'type': type, 'toprint': toPrint }).done((success) => {
                localStorage.setItem("printitems", JSON.stringify(success));
                window.open('/print/'+ type, '_blank');
                toPrint = []
            }).fail((error) => { console.log(error) });
        } else {
            sweetAlert("Nothing to print","Please select items to print.","info");
        }
    }
}

printItemsBasedQuery = (type, query) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("#csrf_token").val()
        }
    });
    $.post("/print-query", { 'type': type , 'query': query }).done((success) => {
        if (success.length) {
            localStorage.setItem("printitems", JSON.stringify(success));
            window.open('/print/'+ type , '_blank');
        } else {
            sweetAlert("Nothing to print","Search query did not match","info");
        }
    }).fail((error) => { console.log(error) });
}

function printAllItems(type)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("#csrf_token").val()
        }
    });
    $.post("/print-all", { 'type': type }).done((success) => {
        if (success.length) {
            localStorage.setItem("printitems", JSON.stringify(success));
            window.open('/print/'+ type, '_blank');
        } else {
            sweetAlert("Nothing to print","Records do not exist","info");
        }
    }).fail((error) => { console.log(error) });
}

function printSingleItem(type, id)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("#csrf_token").val()
        }
    });
    $.post("/print-single", { 'type': type , 'id' : id}).done((success) => {
        localStorage.setItem("printitems", JSON.stringify([success]));
        window.open('/print/'+ type, '_blank');
    }).fail((error) => { console.log(error) });
}

$('#print_all').change(() => {
    if ($('#print_all').prop('checked')) {
        $('.to_check').prop('checked', true);
    }

    if (!$('#print_all').prop('checked')) {
        $('.to_check').prop('checked', false);
    }
    toPrint = []
});

$('.to_check').change(() => {
    if ($('#print_all').prop('checked')) {
        $('#print_all').prop('checked', false);
        loopThroughCheckedItems();
    }
});

function loopThroughCheckedItems()
{
    $.each($('.to_check:checked'), (key, checkbox) => {
        setItems($(checkbox).data('id'))
    });
}

