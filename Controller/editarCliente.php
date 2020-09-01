<?php
require_once("../Model/Cliente.php");
$obj=new Cliente();

$data=array(
    "nombre"=>$_POST['nombreu'],
    "apellido"=>$_POST['apellidou'],
    "cedula"=>$_POST['cedulau'],
    "sexo"=>$_POST['sexou'],
    "direccion"=>$_POST['direccionu'],
    "celular"=>$_POST['celularu'],
    "email"=>$_POST['emailu'],
    "idCliente"=>$_POST['idCliente']
);

    echo  $obj->editarCliente($data);

?>
