<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="frmPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Formulario de Pago</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmCobrou" method="post" onsubmit="return editarCobro()">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="totalPago"><strong>Cliente</strong></label>
                            <input type="hidden" class="form-control" name="idCobro" id="idCobro" minlength="3" maxlength="70" required="required" >
                            <input type="hidden" class="form-control" name="idCliente" id="idCliente" minlength="3" maxlength="70" required="required" >
                            <input type="text" class="form-control" name="cliente" id="cliente" minlength="3" maxlength="70" required="required"  readonly onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col">
                            <label for="totalPago"><strong>Total a Pagar</strong></label>
                            <input type="text" class="form-control" name="totalPago" id="totalPago" minlength="3" maxlength="70" required="required"  readonly>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="lotePago"><strong>Lote a pagar</strong></label>
                            <input type="text" class="form-control" name="lotePago" id="lotePago"  maxlength="150" required="required">
                        </div>
                        <div class="col">
                            <label for="valorPago"><strong>Valor abonado</strong></label>
                            <input type="text" class="form-control" name="valorPago" id="valorPago"  maxlength="10" required="required" onkeypress="return validaNumericos(event) ;">
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="deudaActual"><strong>Deuda Actual</strong></label>
                            <input type="text" class="form-control " name="deudaActual" id="deudaActual"  minlength="3"  maxlength="100" required="required" readonly>
                        </div>
                        <div class="col">
                            <label for="deudaActual"><strong>Estado Actual</strong></label>
                            <input type="text" class="form-control bg-danger text-white" name="estadoActual" id="estadoActual"  minlength="3"  maxlength="100" required="required" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col ">
                            <a href="home.php" class="btn btn-danger float-right">
                                <i class="fa fa-undo-alt"></i>
                                Volver
                            </a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-success float-left" id="enviar" >
                                <i class="far fa-save"></i>
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
                <!--Fin formulario registro usuarios -->
            </div>
        </div>
    </div>
</div>

<?php  require_once ("footer.php")?>
