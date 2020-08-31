<?php
 require_once ("../Model/Usuario.php");

 $obj = new Usuario();

 $data= array(
     "nombre"=>$_POST['nombre'],
     "apellido"=>$_POST['apellido'],
     "cedula"=>$_POST['cedula'],
     "telefono"=>$_POST['telefono'],
     "celular"=>$_POST['celular'],
     "direccion"=>$_POST['direccion'],
     "email"=>$_POST['email'],
     "usuario"=>$_POST['usuario'],
     "password"=>$_POST['password']
 );

$result=$obj->validaEmail_Usuario($data);
if(is_array($result)==true and count($result)==0){
    echo  $obj->agregarUsuario($data);
}else{
    echo 2;
}

?>
