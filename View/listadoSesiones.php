<title>Listado de Sesiones | junta-Agua</title>
<style type="text/css">
    .green{
        background-color:#1cc88a;
        color:white;
        font-weight: bold;
        text-align:center;
    }
    .red{
        background-color:#e74a3b;
        color:white;
        font-weight: bold;
        text-align: center;
    }
</style>
<?php  require_once ("header.php");
$matrizColor = array(
    "SI"=>"green",
    "NO"=>"red"
);
?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Sesiones
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Sesiones.php";

                $obj=new Sesiones();
                $datos=$obj->mostrarSesiones();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                        <th>Cliente</th>
                        <th>Asistencia</th>
                        <th>Fecha</th>                                               
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
                                    <td class=" '.$matrizColor[$value['estado']].' " >'.$value['estado'].'</td>
                                    <td>'.$value['fecha'].'</td>                                    
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerSesion('.$value['idSesion'].')" data-toggle="modal" data-target="#editarSesion">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarSesion('.$value['idSesion'].')">
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
                <?php require_once ("modalSesiones.php")?>

                <?php require_once("footer.php")?>



