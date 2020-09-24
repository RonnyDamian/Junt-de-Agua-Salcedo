/*function mostrar(){
    $.ajax({
        url:"../View/listaUsuarios.php",
        type:"POST",
        success:function (r) {
            $("#tablaUsuarios").html(r);
        }
    });
}*/

function agregarLote(){

    $.ajax({
        type:"POST",
        url:"../Controller/lotes.php",
        data: $("#frmLote").serialize(),
        success:function(r){
            if(r==1){
                $("#frmLote")[0].reset();
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
                toastr["success"]("Lote agregado exitosamente", "Guardado con éxito")

            }else if(r==2){
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
                toastr["warning"]("La clave de lote y/o nuúmero de lote introducido ya existe", "Datos Duplicados")
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
                toastr["error"]("Hubo un error al registrar el Lote", "Error de regostro")
            }
        }
    });
    return false;
}


function editarLote(){
    $.ajax({
        url:"../Controller/editarLote.php",
        type:"POST",
        data:$("#frmLoteu").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/listadoLote.php'", 1900);
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
                toastr["success"]("Lote actualizado exitosamente", "Actualizado con éxito")
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
                toastr["error"]("Error al editar Lote", "Error de regostro")
            }

        }

    });
    return false;
}

function obtenerLote(idLote){
    $.ajax({
        url:"../Controller/obtenerLote.php",
        type:"POST",
        data:"idLote=" +idLote,
        success:function (r) {
            r=JSON.parse(r);
            $("#idClienteu").val(r['idCliente']);
            $("#claveu").val(r['clave']);
            $("#numLoteu").val(r['numLote']);
            $("#superficieu").val(r['superficie']);
            $("#preciou").val(r['precio']);
            $("#idOvalou").val(r['idOvalo']);
            $("#idLote").val(r['idLote']);
        }
    });
}
function eliminarLote(idLote){
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
                url:"../Controller/eliminarLote.php",
                data: "idLote=" + idLote,
                success:function(r){
                    console.log(r);
                    if(r==1){
                        setTimeout("location.href='../View/listadoLote.php'", 1900);
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
                        toastr["success"]("Lote eliminado exitosamente", "Registro eliminado")
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
                        toastr["error"]("Error al eliminar Lote", "Error de eliminación")
                    }
                }
            });
        }
    });

    function llenaTabla(){
        $.ajax({
            url:"../Controller/obtenerLote.php",
            type:"post",
            data:$("#frmT").serialize(),
            success:function(response){
                response = JSON.parse(response);
                $("#tarifaT").val(response['tarifa']);
                $("#riegoT").val(response['valorRiego']);
                $("#sesionT").val(response['multaSesion']);
                $("#mingaT").val(response['multaMinga']);
                $("#valorMoraT").val(response['valorMora']);
            }
        });
        return false;
    }

}