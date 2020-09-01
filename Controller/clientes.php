<?php
 require_once ("../Model/Cliente.php");

 $obj = new Cliente();

 $data= array(
     "nombre"=>$_POST['nombre'],
     "apellido"=>$_POST['apellido'],
     "cedula"=>$_POST['cedula'],
     "sexo"=>$_POST['sexo'],
     "direccion"=>$_POST['direccion'],
     "celular"=>$_POST['celular'],
     "email"=>$_POST['email']
 );

$result=$obj->validaEmail($data);
if(is_array($result)==true and count($result)==0){
    echo $obj->agregarCliente($data);
}else{
    echo 2;
}

?>
