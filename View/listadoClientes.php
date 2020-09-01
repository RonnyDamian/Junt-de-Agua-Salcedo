<title>Listado Clientes | junta-Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Clientes
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

                <?php

                require_once "../Model/Cliente.php";

                $obj=new Cliente();
                $datos=$obj->mostrarClientes();

                $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cédula</th>
                        <th>Sexo</th>
                        <th>Dirección</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Elimar</th>
                    </tr>
                    </thead>
                              <tbody>';
                $datosTabla="";

                foreach ($datos as $key => $value ){

                    $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['nombre'].'</td>
                                    <td>'.$value['apellido'].'</td>
                                    <td>'.$value['cedula'].'</td>
                                    <td>'.$value['sexo'].'</td>
                                    <td>'.$value['direccion'].'</td>
                                    <td>'.$value['celular'].'</td>                                                                                                          
                                    <td>'.$value['email'].'</td>
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerCliente('.$value['idCliente'].')" data-toggle="modal" data-target="#editarCliente">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarCliente('.$value['idCliente'].')">
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
                <?php require_once ("modalEditarCliente.php")?>

                <?php require_once("footer.php")?>



