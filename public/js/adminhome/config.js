$(document).ready(function(){
    $('.collapsible').collapsible();

    $('#form_confige').validate({
      rules: {
          confige_name: {required: true, minlength: 2},
          confige_descri: {required: true},
      },
      messages: {
          confige_name: {required: "<small style='color: red;'>Especifique un proceso</small>", minlength: "<small style='color: red;'>Al menos 2 caracteres requeridos</small>"},
          confige_descri: {required: "<small style='color: red;'>Especifique una descripcion</small>"},
      },
      submitHandler: function (form) {
          return false;
      },
      errorPlacement: function (error, element) {
        console.log(error);
        element.parent().append(error);
      }
  });
});
