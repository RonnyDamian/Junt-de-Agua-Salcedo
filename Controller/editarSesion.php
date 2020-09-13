<?php
require_once("../Model/Sesiones.php");
$obj=new Sesiones();

$data=array(
    "estado"=>$_POST['estadou'],
    "fecha"=>$_POST['fechau'],
    "idSesion"=>$_POST['idSesion']
);

    echo  $obj->editarSesion($data);

?>
