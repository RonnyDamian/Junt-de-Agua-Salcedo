function limpiar(){
    $("#nombre").val("");
    $("#apellid0").val("");
    $("#cedula").val("");
    $("#telefono").val("");
    $("#celular").val("");
    $("#direccio").val("");
    $("#email").val("");
    $("#usuario").val("");
    $("#password").val("");



}


function agregarUsuario(){

    $.ajax({
        type:"POST",
        url:"../Controller/usuarios.php",
        data: $("#frminsert").serialize(),
        success:function(r){

            if(r==1){
                $("#frminsert")[0].reset();
                setTimeout("location.href='../View/home.php' ", 4500);
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
                toastr["success"]("Usuario agregado exitosamente", "Guardado con éxito")

            }else if (r==2){

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
                toastr["warning"]("El usuario y/o email ya existe ", "Datos duplicados")

            }else{
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
                toastr["error"]("Hubo un error al registrar el usuario", "Error de regostro")
            }
        }
    });
    return false;
}
