

<?php require_once ("header.php");
$color=array(
  "SI"=>".green",
  "NO"=>"red"
);
?>

<!-- Logout Modal-->
<style>
    .green{
        background-color:
    }
</style>
<div class="modal fade" id="editarMinga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Registro de Minga</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmMingau" method="post" onsubmit="return editarMinga()">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="nombre"><strong>Cliente</strong></label>
                            <input type="hidden" class="form-control" name="idMinga" id="idMinga" minlength="3" maxlength="70" required="required" >
                            <input type="text" class="form-control" name="clienteu" id="clienteu" minlength="3" maxlength="70" required="required"  readonly>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="fecha"><strong>Fecha de Registro</strong></label>
                            <input type="text" class="form-control" name="fechau" id="fechau" minlength="10" maxlength="10" required="required" readonly>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="apellido"><strong>Asistencia</strong></label>
                            <select name="estadou" id="estadou" required class="form-control ">
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>

                        </div>
                    </div>
                    <hr>
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
