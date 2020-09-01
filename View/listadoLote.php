<title>Listado Lotes | Junta Agua</title>
<?php require_once("header.php") ?>

<!-- Inicio Página Listado Clientes-->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 " >
            <h4 class="m-0 font-weight-bold text-primary ">
                Listado de Lotes
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center bg-primary text-light">
                    <tr>
                        <th>Cliente</th>
                        <th>Clave</th>
                        <th>N° Lote</th>
                        <th>Superficie</th>
                        <th>Precio</th>
                        <th>N° Ovalo</th>
                        <th>Editar</th>
                        <th>Elimar</th>
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
