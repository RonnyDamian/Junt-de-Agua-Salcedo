<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="editarParametros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success " style="color:#ffffff">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Editar Parametros</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" >
                    <div class="row mt-1">
                        <div class="col">
                            <label for="tarifa">Tarifa</label>
                            <input type="text" class="form-control"  name="tarifa" id="tarifa" minlength="1" maxlength="5" onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col">
                            <label for="valorRiego">Valor de Riego</label>
                            <input type="text" class="form-control"  name="valorRiego" id="valorRiego" minlength="1" maxlength="5" onkeypress="return validaNumericos(event) ;">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="multaSesion">Multa Sesión</label>
                            <input type="text" class="form-control"  name="multaSesion" id="multaSesion" minlength="1" maxlength="5" onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col">
                            <label for="multaSesion">Multa Minga</label>
                            <input type="text" class="form-control"  name="multaMinga" id="multaMinga" minlength="1" maxlength="5" onkeypress="return validaNumericos(event) ;">
                        </div>

                    </div>
                    <div class="row mt-2 ">
                        <div class="col-lg-6">
                            <label for="multaSesion">Valor Mora</label>
                            <input type="text" class="form-control"  name="multaMinga" id="multaMinga" minlength="1" maxlength="5" onkeypress="return validaNumericos(event) ;">
                        </div>
                    </div>
                    <div class="modal-footer mt-3 mb-0 ">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-success" href="#">Editar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  require_once ("footer.php")?>
