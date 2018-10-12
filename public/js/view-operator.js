$(document).ready(function() {
    $('#specific-driver').DataTable( {
        "scrollX": true,
    } );
});

function deleteOperator(id) {
    if (confirm("Do you want to delete this record?")) {
        window.location = '/view-operator/delete/' + id;
    }
}

function accountStatus(id) {
    if (confirm("Do you want to update status?")) {
        window.location = '/view-operator/status/' + id;
    }
}

function updateOperator() {
    if (confirm("Update this record?")) {
        $('#form-operator').submit();
    }
}

function deleteDriver(id) {
    if (confirm("Do you want to delete this record?")) {
        window.location = '/driver-registration/delete/' + id;
    }
}

$("#update-driver-modal").on('shown.bs.modal', function(event){
  $(this).find('#id').val($(event.relatedTarget).data('id'))
  $(this).find('#name').val($(event.relatedTarget).data('name'))
  $(this).find('#address').val($(event.relatedTarget).data('address'))
  $(this).find('#contact').val($(event.relatedTarget).data('contact'))
  $(this).find('#sticker_number').val($(event.relatedTarget).data('sticker_number'))
});


$('#act_profile').click(() => {
    $('#profile').trigger('click');
});

$('#profile').on('change', function(event) {
  console.log('this is being called');
  var selectedFile = event.target.files[0];
  var reader = new FileReader();

  var imgtag = document.getElementById("act_profile");
  imgtag.title = selectedFile.name;

  reader.onload = function(event) {
    imgtag.src = event.target.result;
  };

  reader.readAsDataURL(selectedFile);
});

removeInput = event => {
    $($(event.target).parent()).remove();
}

addNumberContainer = () => {
    $('#main_number_container').append(`
        <div class="form-group number_contianer" >
            <button onClick="removeInput(event)" type="button" class="btn btn-success" style="margin: 0px 0px 10px 0px;">
                <i class="fa fa-ban fa-lg"></i>
            </button>
            <div style="padding-top: 5px;">
                Stickers Number:
                <input type="text" class="form-control form-custom" placeholder="Sticker Number" required>
                Body Number:
                <input type="text" class="form-control form-custom" placeholder="Body Number" required>
            </div>
        </div>
    `);
}

updateNumbers = (id) => {
    let sticker = [];
    let body = [];
    let passdata = true;
    $('.number_contianer').each((key,item) => {
        let input = $($(item).children()[1]).children();
        sticker.push($(input[0]).val());
        body.push($(input[1]).val());

        $(input[0]).css('border', '1px solid #D7D7D7');
        $(input[1]).css('border', '1px solid #D7D7D7');

        if (!$(input[0]).val()) {
            $(input[0]).css('border', '1px solid red');
            passdata = false;
        }
        if (!$(input[1]).val()) {
            $(input[1]).css('border', '1px solid red');
            passdata = false;
        }
    });
    if (passdata) {
        if (confirm("Update unit information?")) {
            window.location = `/update-unit-number/${id}/${sticker}/${body}`;
        }
    }
}
