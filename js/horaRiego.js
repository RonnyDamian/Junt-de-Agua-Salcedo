function agregarHoraRiego(){

    $.ajax({
        type:"POST",
        url:"../Controller/horaRiego.php",
        data: $("#frmHR").serialize(),
        success:function(r){

            if(r==1){
                $("#frmHR")[0].reset();
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
                toastr["success"]("Hora de riego agregado exitosamente", "Guardado con éxito")

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
                toastr["warning"]("La hora fin debe ser mayor a la hora inicio", "Horas Incorrectas")

            }else if(r==3){
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
                toastr["warning"]("El número de horas de riego del día 1 debe coincidir con el número de horas de riego del día 2", "Horas de riego desiguales")

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
                toastr["error"]("Hubo un error al registrar la hora de riego", "Error de regostro")
            }
        }
    });
    return false;
}
function obtenerHoraRiego(idHoraRiego){
    $.ajax({
        url:"../Controller/obtenerHoraRiego.php",
        type:"POST",
        data:"idHoraRiego=" +idHoraRiego,
        success:function (r) {
            r=JSON.parse(r);
            $("#idClienteu").val(r['idCliente']);
            $("#idOvalou").val(r['idOvalo']);
            $("#idLoteu").val(r['idLote']);
            $("#numLoteu").val(r['numLote']);
            $("#horaInicio1u").val(r['horaInicio1'])
            $("#horaFin1u").val(r['horaFin1']);
            $("#diaRiego1u").val(r['diaRiego1']);
            $("#horaInicio2u").val(r['horaInicio2']);
            $("#horaFin2u").val(r['horaFin2']);
            $("#diaRiego2u").val(r['diaRiego2']);
            $("#idHoraRiego").val(r['idHoraRiego']);
        }
    });
}

 function editarHoraRiego(){
    $.ajax({
        url:"../Controller/editarHoraRiego.php",
        type:"POST",
        data:$("#frmHRu").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/listadoRiego.php'", 1900);
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
                toastr["success"]("Registro de riego actualizado exitosamente", "Actualizado con éxito")


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
                toastr["warning"]("El  email ya existe ", "Datos duplicados")

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
                toastr["error"]("Error al actualizar el regitro de riego", "Error de regostro")
            }

        }

    });
    return false;
}

function eliminarHoraRiego(idHoraRiego){
    swal.fire({
        type:"warning",
        title: "¿Estás seguro de eliminar este registro?",
        text: "!Una vez eliminado no podra recuperarse¡",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type:"POST",
                    url:"../Controller/eliminarHoraRiego.php",
                    data: "idHoraRiego="+idHoraRiego,
                    success:function(r){
                        console.log(r);
                        if(r==1){
                            setTimeout("location.href='../View/listadoRiego.php'", 1900);
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
                            toastr["error"]("Error al eliminar el registro de riego", "Error de eliminación")
                        }
                    }
                });
            }
        });
}

function capturaNumLote(idLote) {
    $.ajax({
        url: "../Controller/capturarNumLote.php",
        type: "POST",
        data: "idLote=" + idLote,
        success: function (r) {
            $('#numLote').val(r);
        }


    });
}


function capturaNumLoteRiego(idLoteu) {
    $.ajax({
        url: "../Controller/capturarNumLoteRiego.php",
        type: "POST",
        data: "idLoteu=" + idLoteu,
        success: function (r) {
            $('#numLoteu').val(r);
        }
    });
}


