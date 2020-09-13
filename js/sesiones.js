
function obtenerSesion(idSesion){
    $.ajax({
        url:"../Controller/obtenerSesion.php",
        type:"POST",
        data:"idSesion=" +idSesion,
        success:function (r) {
            r=JSON.parse(r);
            $("#clienteu").val(r['nombre']+" "+r['apellido']);
            $("#estadou").val(r['estado']);
            $("#fechau").val(r['fecha']);
            $("#idSesion").val(r['idSesion']);
        }
    });
}

 function editarSesion(){
    $.ajax({
        url:"../Controller/editarSesion.php",
        type:"POST",
        data:$("#frmSesionu").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/listadoSesiones.php'", 1900);
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
                toastr["success"]("Registro actualizado exitosamente", "Actualizado con éxito")


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
                toastr["error"]("Error al actualizar registro", "Error de regostro")
            }

        }

    });
    return false;
}

function eliminarSesion(idSesion){
    swal.fire({
        type: "warning",
        title: "¿Estás seguro de eliminar este registro?",
        text: "!Una vez eliminado no podra recuperarse¡",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type:"POST",
                    url:"../Controller/eliminarSesion.php",
                    data: "idSesion="+idSesion,
                    success:function(r){
                        console.log(r);
                        if(r==1){
                            setTimeout("location.href='../View/listadoSesiones.php'", 1900);
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
                            toastr["success"]("Registro eliminado exitosamente", "Registro eliminado")
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
                            toastr["error"]("Error al eliminar el registro", "Error de eliminación")
                        }
                    }
                });
            }
        });
}