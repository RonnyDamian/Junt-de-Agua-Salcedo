
<?php  require_once("header.php")?>

<!--Inicio página Clientes -->

<!--Inicia contenido de la página  registraUsuarios-->
<!-- Begin Page Content -->.
<div class="container-fluid ">

    <div class="row ">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12  ">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Pagos</h3>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <form id="frmT" onsubmit="return obtenerCobros();" method="post">
                    <div class="card-body">
                        <!--Inicio formulario registro usuarios -->

                        <div class="row mt-2 mb-4">

                            <div class="col-lg-4">
                                <label for="nombre"><strong>Cédula</strong></label>
                                <input type="search" class="form-control" name="searchParam" id="searchParam" minlength="10" maxlength="10" required="required" >
                            </div>
                            <div class="col-lg4">
                                <br>
                                <button type=submit class="btn btn-success py-sm-2 mt-2 float left form-control " > <i class="fa fa-search"> Buscar</i></button>
                            </div>
                </form>

            </div>
            <div class="row mt-2 mb-4">
                <div class="col">
                    <label for="tarifa"><strong>Cliente</strong></label>
                    <input type="text" name="clienteT" id="clienteT" readonly class="form-control">
                </div>
                <div class="col">
                    <label for="tarifa"><strong>Precio tarifa de lote</strong></label>
                    <input type="text" name="tarifaT" id="tarifaT" readonly class="form-control">
                </div>
                <div class="col">
                    <label for="tarifa"><strong>Valor Riego</strong></label>
                    <input type="text" name="riegoT" id="riegoT" readonly class="form-control">
                </div>

            </div>
            <div class="row mt-2 mb-4">

                <div class="col">
                    <label for="tarifa"><strong>Multa Sesión</strong></label>
                    <input type="text" name="sesionT" id="sesionT" readonly class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="tarifa"><strong>Multa Minga</strong></label>
                    <input type="text" name="mingaT" id="mingaT" readonly class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="tarifa"><strong>Valor Mora</strong></label>
                    <input type="text" name="valorMoraT" id="valorMoraT" readonly class="form-control">
                </div>
            </div>
            <hr>
            <div class="row mt-2 mb-4">
                <div class="col-lg-4">
                    <label for="tarifa"><strong>Total a Pagar</strong></label>
                    <input type="text" name="totalT" id="totalT" readonly class="form-control">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-danger float-right" onclick="return limpiar()">
                        <i class="fa fa-brush"></i>
                        Limpiar
                    </button>
                </div>
                <div class="col">
                    <input type="hidden" name="id_cliente" id="id_cliente" class="form-control">
                    <button  class="btn btn-success float-left" id="enviar" data-toggle="modal" data-target="#frmPago" onclick="obtenerCobroModal()">
                        <i class="fa fa-coins"></i>
                        Pagar
                    </button>
                </div>
            </div>

            <!--Fin formulario registro usuarios -->

        </div>
    </div>
</div>
</div>


<!--Fin página Clientes -->

<?php require_once("modalCobro.php") ?>
<?php require_once ("footer.php")?>
