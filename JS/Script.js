$(document).ready(function () {
    $('.group').hide();
    $('#product').change(function () {
      var selectedProduct = $(this).children("option:selected").val();
      switch(selectedProduct){
        case "1":
          $('input#size').prop('required',true);
          $('.group').hide();
          $('#1').show();
          $('input#weight').removeAttr('required');
          $('input#height').removeAttr('required');
          $('input#width').removeAttr('required');
          $('input#length').removeAttr('required');
        break;
        case "2":
          $('input#weight').prop('required',true);
          $('.group').hide();
          $('#2').show();
          $('input#size').removeAttr('required');
          $('input#height').removeAttr('required');
          $('input#width').removeAttr('required');
          $('input#length').removeAttr('required');
        break;
        case "3":
          $('input#height').prop('required',true);
          $('input#width').prop('required',true);
          $('input#length').prop('required',true);
          $('.group').hide();
          $('#3').show();
          $('input#size').removeAttr('required');
          $('input#weight').removeAttr('required');
        break;
          default:
          $('.group').hide();
      }
    })
  });


  function submitForm() {
    $("#mainform").submit();
 }