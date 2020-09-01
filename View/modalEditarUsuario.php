<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-warning text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Editar Usuario</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frminsertu"  onsubmit="return editarUsuario()"  method="post">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="nombre"><strong>Nombres</strong></label>
                            <input type="hidden" class="form-control" name="idUsuario" id="idUsuario" minlength="3" maxlength="70" required="required"  >
                            <input type="text" class="form-control" name="nombreu" id="nombreu" minlength="3" maxlength="70" required="required"  >
                        </div>
                        <div class="col">
                            <label for="apellido"><strong>Apellidos</strong></label>
                            <input type="text" class="form-control" name="apellidou" id="apellidou" minlength="3" maxlength="70" required="required">
                        </div>
                        <div class="col">
                            <label for="cedula"><strong>Número de cédula</strong></label>
                            <input type="text" class="form-control" name="cedulau" id="cedulau" minlength="10" maxlength="10" required="required" onkeypress="return validaNumericos(event) ;">
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="covencional"><strong>Número convencional</strong></label>
                            <input type="text" class="form-control" name="telefonou" id="telefonou" maxlength="10" minlength="7" placeholder="Ej: (043) 453-243" onkeypress="return validaNumericos(event) ;">
                        </div>
                        <di class="col">
                            <label for="celular"><strong>Número celular</strong></label>
                            <input type="text" class="form-control" name="celularu" id="celularu" maxlength="10" minlength="10" placeholder="Ej: 0987654321" onkeypress="return validaNumericos(event) ;">
                        </di>
                        <div class="col">
                            <label for="direccion"><strong>Dirección domiciliaria</strong></label>
                            <input type="text" class="form-control" name="direccionu" id="direccionu" maxlength="100" min="3" required="required">
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col-lg-4">
                            <label for="email"><strong>Correo electrónico</strong></label>
                            <input type="email" class="form-control" name="emailu" id="emailu" minlength="7" maxlength="75" required="required" placeholder="ejemplo@gmail.com">
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
                            <button type="submit" class="btn btn-warning float-left text-white" id="">
                                <i class="far fa-save"></i>
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  require_once ("footer.php")?>
