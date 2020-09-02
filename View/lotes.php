<title>Registro Lotes | Junta Agua</title>
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
                    <form id="frmLote" onsubmit="return agregarLote()" method="post">
                        <div class="row mt-2 mb-4">
                            <div class="col">
                                <label for="nombre"><strong>Cliente</strong></label>
                                <select name="idCliente" id="idCliente" class="form-control">
                                    <option value="" selected="selected" disabled="disabled">--Seleccione una opción--</option>
                                    <?php
                                       require_once("../Model/Cliente.php");
                                       $obj=new Cliente();
                                       $data=$obj->mostrarClientesConcat();
                                       foreach ($data as $value):
                                    ?>
                                    <option value="<?php echo $value['idCliente']?>"><?php echo $value['nombreApellido']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="clave"><strong>Clave</strong></label>
                                <input type="text" class="form-control" name="clave" id="clave" minlength="1" maxlength="7" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col">
                                <label for="numLote"><strong>Númeor de Lote</strong></label>
                                <input type="text" class="form-control" name="numLote" id="numLote" minlength="1" maxlength="7" required="required" onkeypress="return validaNumericos(event) ;">
                            </div>

                        </div>
                        <div class="row mt-2 mb-4">
                            <div class="col-lg-4">
                                <label for="superficier"><strong>Superficie</strong></label>
                                <input type="text" class="form-control" name="superficie" id="superficier" maxlength="6" minlength="1"  onkeypress="return validaNumericos(event) ;">
                            </div>
                            <div class="col-lg-4">
                                <label for="direccion"><strong>Número de ovalo</strong></label>
                                <select name="idOvalo" id="idOvalo" class="form-control">
                                    <option value="" selected="selected" disabled="disabled" class="select select2">--Seleccione una opción--</option>
                                    <?php
                                    require_once("../Model/Ovalo.php");
                                    $obj=new Ovalo();
                                    $data=$obj->mostrarOvaloConcat();
                                    foreach ($data as $value):
                                        ?>
                                        <option value="<?php echo $value['idOvalo']?>"><?php echo $value['numeroOvalo']?></option>
                                    <?php endforeach;?>
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

    <script>
        $(document).ready(funciton(){
                $("#numOvalo").select2();
        });
    </script>

<!--Fin Página Lotes -->

<?php require_once("footer.php") ?>
