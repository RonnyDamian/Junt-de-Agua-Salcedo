<title>Listado Horas de Riego | Junta Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado Horario de Riego
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/HorarioRiego.php";

                $obj=new HorarioRiego();
                $datos=$obj->mostrarHoraRiego();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                        <th >Cliente</th>
                        <th>Ovalo</th>
                        <th>Clave Lote</th>
                        <th>N° Lote</th>
                        <th>Hora Inicio 1</th>
                        <th>Hora Fin 1</th>
                        <th>Dia de Riegos 1</th>
                        <th>Hora Inicio 2</th>
                        <th>Hora Fin 2</th>
                        <th>Dia de Riegos 2</th>
                        <th>Horas de Riego</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                              <tbody>';
                $datosTabla="";

                foreach ($datos as $key => $value ){

                    $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['nombre'].''.$value['apellido'].'</td>
                                    <td>'.$value['toma'].'-'.$value['derivacion'].'-'.$value['canalDer'].'-'.$value['subDer'].'</td>
                                    <td>'.$value['clave'].'</td>
                                    <td>'.$value['numLote'].'</td>
                                    <td>'.$value['horaInicio1'].'</td>
                                    <td>'.$value['horaFin1'].'</td>
                                    <td>'.$value['diaRiego1'].'</td>
                                    <td>'.$value['horaInicio2'].'</td>
                                    <td>'.$value['horaFin2'].'</td>
                                    <td>'.$value['diaRiego2'].'</td>
                                    <td>'.$value['horaRiego'].'</td>
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerHoraRiego('.$value['idHoraRiego'].')" data-toggle="modal" data-target="#editarHoraRiego">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarHoraRiego('.$value['idHoraRiego'].')"><i class="fa fa-trash-alt"> Eliminar</i></button>
                            </td>                                                                                                                                                
                                </tr>';

                }


                echo $tabla.$datosTabla.'</tbody></table>';

                ?>
                <!--Fin Página listado usuarios-->
                <?php require_once ("modalEditarHoraRiego.php")?>

                <?php require_once("footer.php")?>





