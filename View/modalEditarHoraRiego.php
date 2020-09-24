<?php require_once ("header.php")?>

<!-- Logout Modal-->
<div class="modal fade" id="editarHoraRiego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-warning text-light" >
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700">Editar Hora de Riego</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmHRu" method="post" onsubmit="return editarHoraRiego()">
                    <div class="row ">
                        <!-- Columna Dos-->
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12  ">
                            <div class="card shadow mb-4 ">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>

                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!--Inicio formulario registro usuarios -->

                                    <div class="row mt-2 mb-4">
                                        <div class="col">
                                            <input type="hidden" name="idHoraRiego" id="idHoraRiego">
                                            <label for="nombre"><strong>Cliente</strong></label>
                                            <select name="idClienteu" id="idClienteu" class="form-control"  required="required">
                                                <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>
                                                <?php

                                                require_once ("../Model/Cliente.php");
                                                $obj=new Cliente();
                                                $result=$obj->mostrarClientesConcat();
                                                foreach($result as $value):
                                                    ?>
                                                    <option value="<?php echo $value['idCliente']?>"><?php echo $value['nombreApellido']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="nombre"><strong>Número de Ovalo</strong></label>
                                            <select name="idOvalou" id="idOvalou" class="form-control" required="required">
                                                <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>
                                                <?php
                                                require_once("../Model/Ovalo.php");
                                                $obj2=new Ovalo();
                                                $result2=$obj2->mostrarOvaloConcat();
                                                foreach($result2 as $key):
                                                    ?>
                                                    <option value="<?php echo $key['idOvalo']?>"><?php echo $key['numeroOvalo']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2 mb-4">
                                        <div class="col">
                                            <label for="nombre"><strong>Clave de Lote</strong></label>
                                            <select name="idLoteu" id="idLoteu" class="form-control" onchange="capturaNumLoteRiego(this.value)" required="required">
                                                <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>

                                                <?php
                                                require_once ("../Model/Lote.php");
                                                $obj3=new Lote();
                                                $result3=$obj3->mostrarLoteConcat();

                                                foreach ($result3 as $key2):
                                                    ?>
                                                    <option value="<?php echo $key2['idLote']?>"><?php echo $key2['clave']?></option>
                                                <?php endforeach;?>
                                            </select>

                                        </div>
                                        <div class="col">
                                            <label for="numLote"><strong>Número de Lote</strong></label>
                                            <!--El valor se obtiene
                                             a partir de la formula
                                             (superficie/10000)-->
                                            <input type="text" class="form-control" name="numLoteu" id="numLoteu" maxlength="6" minlength="1"  readonly="readonly" required="required">
                                        </div>
                                    </div>
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

                                    <div class="row mt-2 mb-4">
                                        <div class="col">
                                            <!--Parsear a fecha para registrar -->
                                            <!-- -->
                                            <label for="fechaInicio"><strong>Hora Inicio</strong></label>
                                            <!--Primer turno aumentar guión
                                             en la función validaNumeros-->

                                            <input type="text" class="form-control clockpicker" name="horaInicio1u" id="horaInicio1u"  readonly="readonly"  required="required">

                                        </div>
                                        <div class="col">
                                            <!--Primer turno aumentar guión
                                             en la función validaNumeros-->
                                            <label for="fechaFin"><strong>Hora Fin</strong></label>
                                            <input type="text" class="form-control clockpicker" name="horaFin1u" id="horaFin1u"  readonly="readonly"  required="required">
                                        </div>
                                    </div>
                                    <div class="row mt-2 mb-4 col-lg-12">
                                        <div class="col" id="colNum">
                                            <!--Parsear a fecha para registrar -->
                                            <!-- -->
                                            <label for="diaRiego"><strong>Días de riego</strong></label>
                                            <input type="text" class="form-control" name="diaRiego1u" id="diaRiego1u" maxlength="6" minlength="1"  required="required">
                                        </div>
                                    </div>

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

                                    <div class="row mt-2 mb-4">
                                        <div class="col">
                                            <!--Parsear a fecha para registrar -->
                                            <!-- -->
                                            <label for="fechaInicio"><strong>Hora Inicio</strong></label>
                                            <!--Primer turno aumentar guión
                                             en la función validaNumeros-->
                                            <input type="text" class="form-control clockpicker" name="horaInicio2u" id="horaInicio2u"  readonly="readonly" >
                                        </div>
                                        <div class="col">
                                            <!--Primer turno aumentar guión
                                             en la función validaNumeros-->
                                            <label for="fechaFin"><strong>Hora Fin</strong></label>
                                            <input type="text" class="form-control clockpicker" name="horaFin2u" id="horaFin2u"  readonly="readonly" >
                                        </div>
                                    </div>
                                    <div class="row mt-2 mb-4 col-lg-12">
                                        <div class="col">
                                            <!--Parsear a fecha para registrar -->
                                            <!-- -->
                                            <label for="direccion"><strong>Días de riego</strong></label>
                                            <input type="text" class="form-control" name="diaRiego2u" id="diaRiego2u" maxlength="6" minlength="1">
                                        </div>
                                    </div>

                                    <!--Fin formulario registro usuarios -->
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-12 col-lg-12 mb-5" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <a  class="btn btn-danger float-right text-white" data-dismiss="modal">
                                        <i class="fa fa-window-close"></i>
                                        Cancelar
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
                </form>
            </div>
        </div>
    </div>
</div>

<?php  require_once ("footer.php")?>
