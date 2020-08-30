/*Inicio Notificación mensaje toastr*/
$(document).ready(function () {
  $("#enviar").click(function () {
      toastr.options = {
          "closeButton":true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
      }
      toastr["warning"]("Haz dado click en el boton de guardar", "Click")

  });
});
/*Fin de Notificación mensaje toastr*/
function validaNumericos(event) {
    /*Valida solo números*/
    if(event.charCode >= 48 && event.charCode <= 57){
        return true;
    }else{
        return false;
    }
}



function validaLetras(event){
    if((event.charCode >= 65 && event.charCode <= 90)&& (event.charCode >= 97 && event.charCode <= 1227)){
        return true;
    }else{
        return false;
    }
}