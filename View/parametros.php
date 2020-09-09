<title>Valores de Cobro | junta-Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Valores de Cobro
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Parametro.php";

                $obj=new Parametro();
                $datos=$obj->mostrarParametros();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                        <th>Tarifa</th>
                        <th>Valor Riego</th>
                        <th>Multa Sesión</th>
                        <th>Multa Minga</th>
                        <th>Valor Mora</th>
                        <th>Edtar Valores</th>
                    </tr>
                    </thead>
                              <tbody>';
                $datosTabla="";

                foreach ($datos as $key => $value ){

                    $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['TARIFA'].'</td>
                                    <td>'.$value['VALOR_RIEGO'].'</td>
                                    <td>'.$value['MULTA_SESION'].'</td>
                                    <td>'.$value['MULTA_MINGA'].'</td>
                                    <td>'.$value['VALOR_MORA'].'</td>                                    
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerParametros('.$value['idParametro'].')" data-toggle="modal" data-target="#editarParametros">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>                                                                                                                                                                            
                                </tr>
';

                }


                echo $tabla.$datosTabla.'</tbody></table>';

                ?>
                <!--Fin Página listado usuarios-->
                <?php require_once ("modalEditarParametros.php")?>

                <?php require_once("footer.php")?>






