<title>Listado Usuarios | Junta Agua</title>
<?php  require_once ("header.php")?>

<!--Inicio Página listado usuarios -->


<div class="container-fluid" >
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Listado de Usuarios
            </h4>
        </div>
        <div class="card-body" id="tablaUsuarios">
            <div class="table-responsive" >

<?php

  require_once "../Model/Usuario.php";

  $obj=new Usuario();
  $datos=$obj->mostrarUsuarios();

  $tabla='<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cédula</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>direccion</th>
                        <th>email</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
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
                                    <td>'.$value['telefono'].'</td>
                                    <td>'.$value['celular'].'</td>
                                    <td>'.$value['direccion'].'</td>
                                    <td>'.$value['email'].'</td>
                                  <td>
                                <button class="btn btn-warning btn-sm" onclick="obtenerUsuario('.$value['idUsuario'].')" data-toggle="modal" data-target="#editarUsuario">
                                 <i class="fa fa-edit">
                                  Editar
                                  </i>
                                  </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="eliminarUsuario('.$value['idUsuario'].')"><i class="fa fa-trash-alt"> Eliminar</i></button>
                            </td>                                                                                                                                                
                                </tr>
';

}

 echo $tabla.$datosTabla.'</tbody></table>';

?>
<!--Fin Página listado usuarios-->
<?php require_once ("modalEditarUsuario.php")?>
<?php require_once("footer.php")?>
