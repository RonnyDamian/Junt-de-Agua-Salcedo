<?php  require_once ("header.php")?>

<!--Inicio Página Ovalos-->

<div class="container-fluid ">

    <div class="row ">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12  ">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Registro de Ovalos</h3>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--Inicio formulario registro usuarios -->
                    <form id="formovalo" onsubmit="return agregarOvalo()" method="post">
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="nombre"><strong>Toma</strong></label>
                                <input type="text" class="form-control" name="toma" id="toma" minlength="1" maxlength="3" required="required"  onkeypress="return validaLetras(event);">
                            </div>
                            <div class="col">
                                <label for="apellido"><strong>Derivación</strong></label>
                                <input type="text" class="form-control" name="derivacion" id="derivacion" minlength="1" maxlength="3" required="required">
                            </div>
                            <div class="col">
                                <label for="cedula"><strong>Canal derivación</strong></label>
                                <input type="text" class="form-control" name="canalDer" id="canalDer" minlength="1" maxlength="3" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>
                        </div>
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="covencional"><strong>Sub derivación</strong></label>
                                <input type="text" class="form-control" name="subDer" id="subDer" minlength="1" maxlength="3" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col">
                                <label for="direccion"><strong>Dotación</strong></label>
                                <input type="text" class="form-control" name="dotacion" id="dotacion"  minlength="1"  maxlength="6" required="required">
                            </div>
                            <di class="col">
                                <label for="celular"><strong>Superficie</strong></label>
                                <input type="text" class="form-control" name="superficie" id="superficier" maxlength="1" minlength="6" placeholder="Ej: 0987654321" onkeypress="return validaNumericos(event) ;">
                            </di>
                        </div>
                        <div class="row">
                            <di class="col-lg-4">
                                <label for="caudal"><strong>Caudal</strong></label>
                                <input type="text" class="form-control" name="caudal" id="caudal" maxlength="1" minlength="6" placeholder="Ej: 0987654321" onkeypress="return validaNumericos(event) ;">
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
                    <!--Fin formulario registro usuarios -->

                </div>
            </div>
        </div>
    </div>

<!--Fin Página Ovalos -->

<?php  require_once ("footer.php")?>
