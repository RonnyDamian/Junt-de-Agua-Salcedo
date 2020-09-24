/*function mostrar(){
    $.ajax({
        url:"../View/listaUsuarios.php",
        type:"POST",
        success:function (r) {
            $("#tablaUsuarios").html(r);
        }
    });
}*/

function agregarOvalo(){

    $.ajax({
        type:"POST",
        url:"../Controller/ovalos.php",
        data: $("#frmovalo").serialize(),
        success:function(r){
            if(r==1){
                $("#frmovalo")[0].reset();
                setTimeout("location.href='../View/home.php' ", 5600);
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
                toastr["success"]("Ovalo agregado exitosamente", "Guardado con éxito")

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
                toastr["warning"]("El ovalo y/o email ya existe ", "Datos duplicados")

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
                toastr["error"]("Hubo un error al registrar el ovalo", "Error de regostro")
            }
        }
    });
    return false;
}


function editarOvalo(){
    $.ajax({
        url:"../Controller/editarOvalo.php",
        type:"POST",
        data:$("#frmovalou").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/listadOvalo.php'", 1900);
                toastr.options = {
                    "closeButton":true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": false,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "100",
                    "hideDuration": "500",
                    "timeOut": "2500",
                    "extendedTimeOut": "500",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("Ovalo actualizado exitosamente", "Actualizado con éxito")
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
                toastr["warning"]("El ovalo y/o email ya existe ", "Datos duplicados")

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
                toastr["error"]("Error al editar ovalo", "Error de regostro")
            }

        }

    });
    return false;
}

function obtenerOvalo(idOvalo){
    $.ajax({
        url:"../Controller/obtenerOvalo.php",
        type:"POST",
        data:"idOvalo=" +idOvalo,
        success:function (r) {
            r=JSON.parse(r);
            $("#tomau").val(r['toma']);
            $("#derivacionu").val(r['derivacion']);
            $("#canalDeru").val(r['canalDer']);
            $("#subDeru").val(r['subDer']);
            $("#dotacionu").val(r['dotacion']);
            $("#superficieu").val(r['superficie'])
            $("#caudalu").val(r['caudal']);
            $("#idOvalo").val(r['idOvalo']);
        }
    });
}
function eliminarOvalo(idOvalo){
    Swal.fire({
        title: '¿Está seguro de eliminar este registro?',
        text: "Una vez eliminado ya no se podra recuperar!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si, eliminelo!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type:"POST",
                url:"../Controller/eliminarOvalo.php",
                data: "idOvalo=" + idOvalo,
                success:function(r){
                    console.log(r);
                    if(r==1){
                        setTimeout("location.href='../View/listadOvalo.php'", 1900);
                        toastr.options = {
                            "closeButton":true,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": false,
                            "positionClass": "toast-top-center",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "100",
                            "hideDuration": "500",
                            "timeOut": "2500",
                            "extendedTimeOut": "500",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr["success"]("Usuario eliminado exitosamente", "Registro eliminado")
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
                        toastr["error"]("Error al eliminar Ovalo", "Error de eliminación")
                    }
                }
            });
        }
    });
}