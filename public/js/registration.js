$(document).ready(function() {
   $('#drop-tricycle').prop('disabled', true).hide(); 
   $('#register-type').val('Sikad-sikad'); 
});

$('#register-type').on('change', function() {
    if ($(this).val() == 'Sikad-sikad') {
       $('#amount_paid').prop('disabled', false).show(); 
       $('#units').prop('disabled', false).show(); 
       $('#drop-tricycle').prop('disabled', false).show(); 

       $('#drop-sikad').prop('disabled', true).hide(); 
    }
    if ($(this).val() == 'Tricycle') {
       $('#amount_paid').prop('disabled', true).hide(); 
       $('#units').prop('disabled', true).hide(); 
       $('#drop-tricycle').prop('disabled', true).hide(); 

       $('#drop-sikad').prop('disabled', false).show(); 
    }
});
