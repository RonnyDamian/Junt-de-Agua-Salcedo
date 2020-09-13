<title>Listado de Gastos | junta-Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Gastos
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Gasto.php";

                $obj=new Gasto();
                $datos=$obj->mostrarGastos();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center text-white">
                    <tr>
                        <th>Responsable</th>
                        <th>Cantidad</th>
                        <th>Valor Unitario</th>
                        <th>Valor Total</th>
                        <th>Descripción</th>
                        <th>fecha</th>                        
                        <th>Editar</th>
                        <th>Elimar</th>
                    </tr>
                    </thead>
                              <tbody>';
                $datosTabla="";

                foreach ($datos as $key => $value ){

                    $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['responsable'].'</td>
                                    <td>'.$value['cantidad'].'</td>
                                    <td>'.'$ '.$value['vUnitario'].'</td>
                                    <td>'.'$ '.$value['total'].'</td>
                                    <td>'.$value['descripcion'].'</td>
                                    <td>'.$value['fecha'].'</td>                                                                                                                                              
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerGastos('.$value['idGastos'].')" data-toggle="modal" data-target="#editarGastos">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarGastos('.$value['idGastos'].')">
                                <i class="fa fa-trash-alt"> 
                                Eliminar
                                </i>
                                </button>
                            </td>                                                                                                                                                
                                </tr>
';

                }


                echo $tabla.$datosTabla.'</tbody></table>';

                ?>
                <!--Fin Página listado usuarios-->
                <?php require_once ("modalEditarGastos.php")?>

                <?php require_once("footer.php")?>



