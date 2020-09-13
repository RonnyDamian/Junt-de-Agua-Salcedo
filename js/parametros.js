function obtenerParametros(idParametro){
    $.ajax({
        url:"../Controller/obtenerParametros.php",
        type:"POST",
        data:"idParametro=" +idParametro,
        success:function (r) {
            r=JSON.parse(r);
            $("#tarifau").val(r['tarifa']);
            $("#valorRiegou").val(r['valorRiego']);
            $("#multaSesionu").val(r['multaSesion']);
            $("#multaMingau").val(r['multaMinga']);
            $("#valorMorau").val(r['valorMora']);
            $("#idParametro").val(r['idParametro']);
        }
    });
}

 function editarParametros(){
    $.ajax({
        url:"../Controller/editarParametros.php",
        type:"POST",
        data:$("#frmpU").serialize(),
        success:function (r) {
            if(r==1){
                setTimeout("location.href='../View/parametros.php'", 1900);
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
                toastr["success"]("registro actualizado exitosamente", "Actualizado con éxito")


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
                toastr["error"]("Error al actualizar el registro", "Error de registro")
            }

        }

    });
    return false;
}


