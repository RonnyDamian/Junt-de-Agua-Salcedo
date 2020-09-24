<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="editarLote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-warning text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Editar Lote</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmLoteu" onsubmit="return editarLote()" method="post">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="cleinte"><strong>Cliente</strong></label>
                            <input type="hidden" name="idLote" id="idLote">
                            <select name="idClienteu" id="idClienteu" class="form-control">
                                <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>
                                <?php
                                require_once("../Model/Cliente.php");
                                $obj=new Cliente();
                                $data=$obj->mostrarClientesConcat();
                                foreach ($data as $value):
                                    ?>
                                    <option value="<?php echo $value['idCliente']?>" selected="selected"><?php echo $value['nombreApellido']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="claveo"><strong>Clave</strong></label>
                            <input type="text" class="form-control" name="claveu" id="claveu" minlength="1" maxlength="7" required="required" onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col">
                            <label for="numLote"><strong>Númeor de Lote</strong></label>
                            <input type="text" class="form-control" name="numLoteu" id="numLoteu" minlength="1" maxlength="7" required="required" onkeypress="return validaNumericos(event) ;">
                        </div>

                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="superficier"><strong>Superficie</strong></label>
                            <input type="text" class="form-control" name="superficieu" id="superficieu" maxlength="6" minlength="1"  onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col">
                            <label for="superficier"><strong>Precio</strong></label>
                            <input type="text" class="form-control" name="preciou" id="preciou" maxlength="6" minlength="1"  onkeypress="return validaNumericos(event) ;">
                        </div>
                        <div class="col">
                            <label for="direccion"><strong>Número de ovalo</strong></label>
                            <select name="idOvalou" id="idOvalou" class="form-control">
                                <option value="" selected="selected" disabled="disabled" class="select select2">--Seleccione una opción--</option>
                                <?php
                                require_once("../Model/Ovalo.php");
                                $obj=new Ovalo();
                                $data=$obj->mostrarOvaloConcat();
                                foreach ($data as $value):
                                    ?>
                                    <option value="<?php echo $value['idOvalo']?>" selected="selected"><?php echo $value['numeroOvalo']?></option>
                                <?php endforeach;?>
                            </select>
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
                            <button type="submit" class="btn btn-warning float-left" id="enviar">
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
