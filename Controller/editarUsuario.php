<?php
require_once("../Model/Usuario.php");
$obj=new Usuario();

$data=array(
    "nombre"=>$_POST['nombreu'],
    "apellido"=>$_POST['apellidou'],
    "cedula"=>$_POST['cedulau'],
    "telefono"=>$_POST['telefonou'],
    "celular"=>$_POST['celularu'],
    "direccion"=>$_POST['direccionu'],
    "email"=>$_POST['emailu'],
    "idUsuario"=>$_POST['idUsuario']
);

    echo  $obj->editarUsuario($data);

?>
