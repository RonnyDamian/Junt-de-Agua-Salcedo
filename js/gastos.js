function agregarGastos(){

    $.ajax({
        type:"POST",
        url:"../Controller/gastos.php",
        data: $("#frmGastos").serialize(),
        success:function(r){
            if(r==1){
                $("#frmGastos")[0].reset();
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
                toastr["success"]("Gastos agregados exitosamente", "Guardado con éxito")

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
                toastr["error"]("Hubo un error al registrar los gastos", "Error de registro")
            }
        }
    });
    return false;
}
function obtenerGastos(idGastos){
    $.ajax({
        url:"../Controller/obtenerGastos.php",
        type:"POST",
        data:"idGastos=" +idGastos,
        success:function (r) {
            r=JSON.parse(r);
            $("#fechau").val(r['fecha']);
            $("#responsableu").val(r['responsable']);
            $("#cantidadu").val(r['cantidad']);
            $("#vUnitariou").val(r['vUnitario']);
            $("#descripcionu").val(r['descripcion']);
            $("#idGastos").val(r['idGastos']);
        }
    });
}

 function editarGastos(){
    $.ajax({
        url:"../Controller/editarGastos.php",
        type:"POST",
        data:$("#frmGastosu").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/listadoGastos.php'", 1900);
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
                toastr["success"]("Gastos  actualizados exitosamente", "Actualizado con éxito")


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
                toastr["error"]("Error al actualizar cliente", "Error de regostro")
            }

        }

    });
    return false;
}

function eliminarGastos(idGastos){
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
                    url:"../Controller/eliminarGastos.php",
                    data: "idGastos="+idGastos,
                    success:function(r){
                        console.log(r);
                        if(r==1){
                            setTimeout("location.href='../View/listadoGastos.php'", 1900);
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
                            toastr["error"]("Error al eliminar registro", "Error de eliminación")
                        }
                    }
                });
            }
        });
}