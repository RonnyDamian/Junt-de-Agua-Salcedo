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



function eliminarLote(idLote){
    swal.fire({
        title: "¿Estás seguro de eliminar este registro?",
        text: "!Una vez eliminado no podra recuperarse¡",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
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
}

function obtenerCobros(){
    $.ajax({
        url:"../Controller/obtenerCobro.php",
        type:"post",
        data:$("#frmT").serialize(),
        success:function(response) {
            alert(response);
            if (response!=null) {
                response = JSON.parse(response);
                $("#clienteT").val(response['nombre'] + " " + response['apellido']);
                $("#tarifaT").val("$"+response['TARIFA']);
                $("#riegoT").val("$"+response['valor_riego']);
                $("#sesionT").val("$"+response['valor_sesion']);
                $("#mingaT").val("$"+response['valor_minga']);
                $("#valorMoraT").val(0);
                $("#totalT").val("$"+response['valor_total']);


            } else {
                toastr.options = {
                    "closeButton": true,
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
                toastr["error"]("Error el registro no existe", "Regitro no encontrado")
            }
        }
    });
    return false;
}

function obtenerCobroModal(valor){
    var valor = document.getElementById("id_cliente").value;
    $.ajax({
        url:"../Controller/cobroModal.php",
        type:"POST",
        data:"id_cliente="+valor,
        success:function(response) {
            response=JSON.parse(response);
            $("#idCliente").val(response['idCliente']);
            $("#cliente").val(response['cliente']);
            $("#totalPago").val(response['total']);
            $("#estadoActual").val(response['estado']);
            $("#deudaActual").val('$ ' + response['total']);
            $("#idCobro").val(response['idCobro']);

        }
    });
}
function editarCobro(){
    $.ajax({
        url:"../Controller/editarCobro.php",
        type:"POST",
        data:$("#frmCobrou").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/pagoCuotas.php'", 1900);
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
                    toastr["warning"]("El valor a pagar es mayor al saldo total", "Valores incorrectos")
            }

        }

    });
    return false;
}
