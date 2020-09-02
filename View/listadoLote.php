<title>Listado Lotes | Junta Agua</title>
<title>Listado Usuarios | Junta Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Lotes
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Lote.php";

                $obj=new Lote();
                $datos=$obj->mostrarLote();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
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
                              <tbody>';
                $datosTabla="";

                foreach ($datos as $key => $value ){

                    $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['nombre'].' '.$value['apellido'].'</td>
                                    <td>'.$value['clave'].'</td>
                                    <td>'.$value['numLote'].'</td>
                                    <td>'.$value['superficie'].'</td>
                                    <td>'."$ ".$value['precio'].'</td>
                                    <td>'.$value['toma'].'-'.$value['derivacion'].'-'.$value['canalDer'].'-'.$value['subDer'].'</td>                                    
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerLote('.$value['idLote'].')" data-toggle="modal" data-target="#editarLote">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarLote('.$value['idLote'].')">
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
                <?php require_once ("modalEditarLote.php")?>

                <?php require_once("footer.php")?>


