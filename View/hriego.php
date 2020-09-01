<title>Horario de Riego | Junta Agua</title>
<?php require_once ("header.php")?>
<!--Inicio Página Horairo de riego -->
<div class="container-fluid ">

    <div class="row ">


        <!-- Columna Dos-->
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12  ">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Horario de Riego</h3>
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
                                <label for="nombre"><strong>Ovalo</strong></label>
                                <select name="ovalo" id="ovalo" class="form-control">
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
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="nombre"><strong>Clave de Lote</strong></label>
                                <select name="claveLote" id="claveLote" class="form-control">
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
                                <label for="numLote"><strong>Número de Lote</strong></label>
                                <!--El valor se obtiene
                                 a partir de la formula
                                 (superficie/10000)-->
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1"  onkeypress="return validaNumericos(event) ;">
                            </div>
                        </div>
                        <div class="row mt-2 mb-4">
                            <div class="col-lg-6">
                                <label for="hRiego"><strong>Horas de riego</strong></label>
                                <!--El valor se obtiene
                                 a partir de la formula
                                 (superficie/10000)-->
                                <input type="text" class="form-control" name="hRiego" id="hRiego" maxlength="6" minlength="1" readonly="readonly">
                            </div>
                        </div>
                    </form>
                    <!--Fin formulario registro usuarios -->
                </div>
            </div>
        </div>

              <!--Inicio Primer Turno -->

        <div class="col-xl-6 col-lg-6" >
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">PrimerTurno</h3>
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
                                <!--Parsear a fecha para registrar -->
                                <!-- -->
                                <label for="direccion"><strong>Hora Inicio</strong></label>
                                <!--Primer turno aumentar guión
                                 en la función validaNumeros-->
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1" >
                            </div>
                            <div class="col">
                                <!--Primer turno aumentar guión
                                 en la función validaNumeros-->
                                <label for="direccion"><strong>Hora Fin</strong></label>
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1" >
                            </div>
                        </div>
                        <div class="row mt-2 mb-4 col-lg-12">
                            <div class="col">
                                <!--Parsear a fecha para registrar -->
                                <!-- -->
                                <label for="direccion"><strong>Días de riego</strong></label>
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1" >
                            </div>
                        </div>
                    </form>
                    <!--Fin formulario registro usuarios -->
                </div>
            </div>
        </div>

        <!--Inicio Segundo Turno -->

        <div class="col-xl-6 col-lg-6" >
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Segundo Turno</h3>
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
                                <!--Parsear a fecha para registrar -->
                                <!-- -->
                                <label for="direccion"><strong>Hora Inicio</strong></label>
                                <!--Primer turno aumentar guión
                                 en la función validaNumeros-->
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1" >
                            </div>
                            <div class="col">
                                <!--Primer turno aumentar guión
                                 en la función validaNumeros-->
                                <label for="direccion"><strong>Hora Fin</strong></label>
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1" >
                            </div>
                        </div>
                        <div class="row mt-2 mb-4 col-lg-12">
                            <div class="col">
                                <!--Parsear a fecha para registrar -->
                                <!-- -->
                                <label for="direccion"><strong>Días de riego</strong></label>
                                <input type="text" class="form-control" name="numLote" id="numLote" maxlength="6" minlength="1">
                            </div>
                        </div>
                    </form>
                    <!--Fin formulario registro usuarios -->
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-lg-12 mb-5" >
        <div class="row">
            <div class="col-lg-6">
                <a href="home.php" class="btn btn-danger float-right">
                    <i class="fa fa-undo-alt"></i>
                    Volver
                </a>
            </div>
            <div class="col-lg-6">
                <button type="submit" class="btn btn-success float-left" id="enviar">
                    <i class="far fa-save"></i>
                    Guardar
                </button>
            </div>
        </div>
        </div>
    </div>
</div>

<!--Fin Página Horario de riego -->

<?php  require_once ("footer.php") ?>
