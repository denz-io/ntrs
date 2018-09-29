var body_numbers = [];

$(document).ready(function() {
   $('#drop-sikad').prop('disabled', false).show(); 
   $('#drop-tricycle').prop('disabled', true).hide(); 
   setTimeout(()=> {
       getSuggestedAssociation($('#register-type').val());
   }, 2000);
   setTimeout(()=>{drawCanvas()},500);
});

$('#register-type').on('change', function() {
    let self = this;
    if ($(self).val() == 'Sikad-sikad') {
       $('#drop-sikad').prop('disabled', false).show(); 
       $('#drop-tricycle').prop('disabled', true).hide(); 
    }
    if ($(self).val() == 'Tricycle') {
       $('#drop-tricycle').prop('disabled', false).show(); 
       $('#drop-sikad').prop('disabled', true).hide(); 
    }
    getSuggestedAssociation($(self).val());
});

function getSuggestedAssociation(type) {
    $.get( "/autosuggest/" + type , ( result ) => {
        sweetAlert("The association " + result.assoc + " has been recommended to you", "You can still choose to pick another association.", "info")
       if (type == 'Sikad-sikad') {
           $('#drop-sikad').prop('value', result.assoc);
       }
       if (type == 'Tricycle') {
           $('#drop-tricycle').prop('value', result.assoc); 
       }
    }).fail((error)=> { console.log(error); });
}

$('#snap').on('click',function() {
    $('#profile_input').trigger('click');
});

$('#profile_input').on('change', function(event) {
  var selectedFile = event.target.files[0];
  var reader = new FileReader();

  var imgtag = document.getElementById("user_image");
  imgtag.title = selectedFile.name;

  reader.onload = function(event) {
    imgtag.src = event.target.result;
  };

  reader.readAsDataURL(selectedFile);
  setTimeout(()=>{drawCanvas()},500);
});


function drawCanvas(e) {
  var c=document.getElementById("image_canvas");
  var ctx=c.getContext("2d");
  var img=document.getElementById("user_image");
  ctx.drawImage(img,0,0,300,150);
  $('#profile').val(document.getElementById('image_canvas').toDataURL());
};

$('#units').on('change keyup', function() {
    $("#bodynumber").empty();
    $('#body_number').val('');
    body_numbers = [];
    if ($('#units').val() > 0) {
        $("#bodynumber").append(`
            <div class="bnumber-title">
                <label>Body Number:</label>
            </div>
        `);    
        for (let i = 0; i < $('#units').val(); i++) {
            $("#bodynumber").append(`
                <input type="text" class="form-custom bnumber" id="bi_${i}" placeholder="Body #" required>
            `);    
        }
    }
});

$("body").on("keyup", ".bnumber", function(){
    body_numbers = [];
    $('.bnumber').each((index) => {
        if ($('#bi_'+index).val()) {
            body_numbers.push($('#bi_'+index).val());
        }
    });
    $('#body_number').val(body_numbers.toString());
});
