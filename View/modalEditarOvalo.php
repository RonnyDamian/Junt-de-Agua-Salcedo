<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="editarOvalo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-warning text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Editar Ovalo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmovalou" onsubmit="return editarOvalo()" method="post">
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <input type="hidden" class="form-control" name="idOvalo" id="idOvalo" minlength="3" maxlength="70" required="required"  >
                            <label for="tomau"><strong>Toma</strong></label>
                            <input type="text" class="form-control" name="tomau" id="tomau" minlength="1" maxlength="3" required="required" >
                        </div>
                        <div class="col">
                            <label for="derivacionu"><strong>Derivación</strong></label>
                            <input type="text" class="form-control" name="derivacionu" id="derivacionu" minlength="1" maxlength="3" required="required">
                        </div>
                        <div class="col">
                            <label for="canalDeru"><strong>Canal derivación</strong></label>
                            <input type="text" class="form-control" name="canalDeru" id="canalDeru" minlength="1" maxlength="3" required="required">
                        </div>
                    </div>
                    <div class="row mt-2 mb-4">
                        <div class="col">
                            <label for="subDeru"><strong>Sub derivación</strong></label>
                            <input type="text" class="form-control" name="subDeru" id="subDeru" minlength="1" maxlength="3" required="required" >
                        </div>
                        <div class="col">
                            <label for="dotacionu"><strong>Dotación</strong></label>
                            <input type="text" class="form-control" name="dotacionu" id="dotacionu"  minlength="1"  maxlength="6" required="required">
                        </div>
                        <di class="col">
                            <label for="superficieu"><strong>Superficie</strong></label>
                            <input type="text" class="form-control" name="superficieu" id="superficieu" maxlength="6" minlength="1">
                        </di>
                    </div>
                    <div class="row">
                        <di class="col-lg-4">
                            <label for="caudalu"><strong>Caudal</strong></label>
                            <input type="text" class="form-control" name="caudalu" id="caudalu" maxlength="6" minlength="1">
                        </di>
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
            </div>
        </div>
    </div>
</div>

<?php  require_once ("footer.php")?>
