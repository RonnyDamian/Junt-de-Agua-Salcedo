<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="editarGastos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Editar Cliente</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmGastosu" method="post" onsubmit="return editarGastos()">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <input type="hidden" name="idGastos" id="idGastos" class="form-control">
                            <label for="nombre"><strong>Fecha</strong></label>
                            <input type="date" class="form-control" name="fechau" id="fechau" minlength="3" maxlength="70" required="required" >
                        </div>
                        <div class="col">
                            <label for="apellido"><strong>Responsable</strong></label>
                            <input type="text" class="form-control" name="responsableu" id="responsableu" minlength="3" maxlength="70" required="required">
                        </div>
                        <div class="col">
                            <label for="cedula"><strong>Cantidad</strong></label>
                            <input type="text" class="form-control" name="cantidadu" id="cantidadu" minlength="1" maxlength="10" required="required" onkeypress="return validaNumericos(event) ;">
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col-lg-4">
                            <label for="covencional"><strong>Valor Unitario</strong></label>
                            <input type="text" class="form-control" name="vUnitariou" id="vUnitariou" minlength="1" maxlength="10" required="required" onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col-lg-8">
                            <label for="direccion"><strong>Descripción</strong></label> <br>

                            <textarea name="descripcionu" id="descripcionu" cols="50" rows="5" class="form-control" required style="resize:none     ">

                                </textarea>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <a  class="btn btn-danger float-right text-white" data-dismiss="modal">
                                <i class="fa fa-window-close"></i>
                                Cancelar
                            </a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-success float-left" id="enviar">
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
