<title>Listado Usuarios | Junta Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Ovalos
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Ovalo.php";

                $obj=new Ovalo();
                $datos=$obj->mostrarOvalo();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                        <th>Toma</th>
                        <th>Derivación</th>
                        <th>Canal</th>
                        <th>Sub derivación</th>
                        <th>Dotación</th>
                        <th>Superficie</th>
                        <th>Caudal</th>
                        <th>Editar</th>
                        <th>Eliminar</th>  
                    </tr>
                    </thead>
                              <tbody>';
                $datosTabla="";

                foreach ($datos as $key => $value ){

                    $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['toma'].'</td>
                                    <td>'.$value['derivacion'].'</td>
                                    <td>'.$value['canalDer'].'</td>
                                    <td>'.$value['subDer'].'</td>
                                    <td>'.$value['dotacion'].'</td>
                                    <td>'.$value['superficie'].'</td>
                                    <td>'.$value['caudal'].'</td>
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerOvalo('.$value['idOvalo'].')" data-toggle="modal" data-target="#editarOvalo">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarOvalo('.$value['idOvalo'].')">
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
                <?php require_once ("modalEditarOvalo.php")?>

                <?php require_once("footer.php")?>




