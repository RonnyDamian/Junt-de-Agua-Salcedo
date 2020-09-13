

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
<div class="modal fade" id="editarNotificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Notificación</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmNotificacionu" method="post" onsubmit="return editarNotificacion()">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="nombre"><strong>Fecha</strong></label>
                            <input type="hidden" class="form-control" name="idNotificacion" id="idNotificacion" minlength="3" maxlength="70" required="required" >
                            <input type="text" class="form-control" name="fechau" id="fechau" minlength="3" maxlength="70" required="required"  readonly>
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="apellido"><strong>Tipo</strong></label>
                            <select name="estadou" id="estadou" required class="form-control ">
                                <option value="Minga">Minga</option>
                                <option value="Sesion">Sesión</option>
                            </select>

                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="fecha"><strong>Descripción</strong></label><br>
                            <textarea name="descripcionu" id="descripcionu" cols="10" rows="5" style="resize: none" class="form-control"></textarea>

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
