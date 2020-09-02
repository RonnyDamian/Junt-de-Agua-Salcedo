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
$strCedula=isset($_POST['cedula'])? $_POST['cedula']:'';
$validaCedula=$obj->validaCedula($strCedula);
if($validaCedula=="CedulaCorrecta"){
$result=$obj->valida_Email_Cedula($data);
if(is_array($result)==true and count($result)==0){
    echo $obj->agregarCliente($data);
}else{
    echo 2;
}
}else{
    echo 3;
}
?>
