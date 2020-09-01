<title>Listado Horas de Riego | Junta Agua</title>
<?php require_once("header.php") ?>

<!-- Inicio Página Listado Clientes-->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 " >
            <h4 class="m-0 font-weight-bold text-primary ">
                Listado Horas de Riego
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center bg-primary text-light">
                    <tr>
                        <th >Cliente</th>
                        <th>Ovalo</th>
                        <th>Clave Lote</th>
                        <th>N° Lote</th>
                        <th>Horas Riego</th>
                        <th>Turno 1</th>
                        <th>Dia de Riegos 1</th>
                        <th>Turno 2</th>
                        <th>Dia de Riegos 2</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="btn btn-warning">
                                <i class="fa fa-edit">
                                    Editar
                                </i>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                <i class="fa fa-trash-alt">
                                    Eliminar
                                </i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Fin Página Listado Clientes -->

<?php require_once("footer.php")?>
