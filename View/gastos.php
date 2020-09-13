<title>Registro de Gastos</title>
<?php  require_once("header.php")?>

<!--Inicio página Clientes -->

<!--Inicia contenido de la página  registraUsuarios-->
<!-- Begin Page Content -->
<div class="container-fluid ">

    <div class="row ">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12  ">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Registro de Gastos</h3>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--Inicio formulario registro usuarios -->
                    <form id="frmGastos" method="post" onsubmit="return agregarGastos()">
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="nombre"><strong>Fecha</strong></label>
                                <input type="date" class="form-control" name="fecha" id="fecha" minlength="3" maxlength="70" required="required" >
                            </div>
                            <div class="col">
                                <label for="apellido"><strong>Responsable</strong></label>
                                <input type="text" class="form-control" name="responsable" id="responsable" minlength="3" maxlength="70" required="required">
                            </div>
                            <div class="col">
                                <label for="cedula"><strong>Cantidad</strong></label>
                                <input type="text" class="form-control" name="cantidad" id="cantidad" minlength="1" maxlength="10" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>
                        </div>
                        <div class="row mt-2 mb-4">
                            <div class="col-lg-4">
                                <label for="covencional"><strong>Valor Unitario</strong></label>
                                <input type="text" class="form-control" name="vUnitario" id="vUnitario" minlength="1" maxlength="10" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col-lg-8">
                                <label for="direccion"><strong>Descripción</strong></label> <br>

                                <textarea name="descripcion" id="descripcion" cols="50" rows="5" class="form-control" required style="resize: none">

                                </textarea>

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

    <!--Fin página Clientes -->


    <?php require_once ("footer.php")?>
