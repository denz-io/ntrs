var toPrint = [];

function setItems(id) 
{
    if ($('#check_'+ id).prop('checked')) {
        toPrint.push(id);
    } else {
        removeItem(id);
    }
}

function removeItem(id)
{
    $.each(toPrint, (key, value) => {
        if (id == value) {
            toPrint.splice(key,1);
        }
    })
}

function printItems(type)
{
    if( $('#print_all').prop('checked') ) {
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

function printAllItems(type)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("#csrf_token").val()
        }
    });
    $.post("/print-all", { 'type': type }).done((success) => {
        localStorage.setItem("printitems", JSON.stringify(success));
        window.open('/print/'+ type, '_blank');
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

