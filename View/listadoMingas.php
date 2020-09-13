<title>Listado de Mingas | junta-Agua</title>
<style>
    .green{
        background-color:#1cc88a;
        color:#ffffff;
    }
    .red{
        background-color:#e74a3b;
        color:#ffffff;
    }
</style>

<?php  require_once ("header.php");
  $matrizColor= array(
          "SI"=>"green",
          "NO"=> "red"
  );
?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Mingas
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Mingas.php";

                $obj=new Mingas();
                $datos=$obj->mostrarMingas();

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
                                    <td class="'.$matrizColor[$value['estado']].'">'.$value['estado'].'</td>
                                    <td>'.$value['fecha'].'</td>                                    
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerMinga('.$value['idMinga'].')" data-toggle="modal" data-target="#editarMinga">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarMinga('.$value['idMinga'].')">
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
                <?php require_once ("modalMingas.php")?>

                <?php require_once("footer.php")?>



