$(document).ready(function() {
   $('#drop-tricycle').prop('disabled', true).hide(); 
   $('#register-type').val('Sikad-sikad'); 
   $('#register-submit').prop('disabled',true);
});

$('#register-type').on('change', function() {
    if ($(this).val() == 'Sikad-sikad') {
       $('#drop-sikad').prop('disabled', false).show(); 
       $('#drop-tricycle').prop('disabled', true).hide(); 
    }
    if ($(this).val() == 'Tricycle') {
       $('#drop-sikad').prop('disabled', true).hide(); 
       $('#drop-tricycle').prop('disabled', false).show(); 
    }
});

