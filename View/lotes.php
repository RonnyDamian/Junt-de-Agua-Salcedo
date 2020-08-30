<?php require_once("header.php")?>

<!--Inicia Página Lotes -->
<div class="container-fluid ">

    <div class="row ">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12  ">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Registro de Lotes</h3>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--Inicio formulario registro usuarios -->
                    <form>
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="nombre"><strong>Cliente</strong></label>
                                <select name="cliente" id="cliente" class="form-control">
                                    <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="apellido"><strong>Clave</strong></label>
                                <input type="text" class="form-control" name="claveLote" id="claveLote" minlength="1" maxlength="7" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col">
                                <label for="apellido"><strong>Númeor de Lote</strong></label>
                                <input type="text" class="form-control" name="numLote" id="numLote" minlength="1" maxlength="7" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>

                        </div>
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="celular"><strong>Superficie</strong></label>
                                <input type="text" class="form-control" name="superficie" id="superficier" maxlength="1" minlength="6" placeholder="Ej: 0987654321" onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col">
                                <label for="celular"><strong>Precio</strong></label>

                                <!--El valor se obtiene
                                 a partir de la formula
                                 (superficie/10000)-->

                                <input type="text" class="form-control" name="superficie" id="superficier" maxlength="1" minlength="6" placeholder="Ej: 0987654321" onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col">
                                <label for="direccion"><strong>Número de ovalo</strong></label>
                                <select name="numOvalo" id="numOvalo" class="form-control">
                                    <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                            </div>
                        </div>
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


<!--Fin Página Lotes -->

<?php require_once("footer.php") ?>
