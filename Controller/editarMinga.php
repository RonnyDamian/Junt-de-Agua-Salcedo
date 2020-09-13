<?php
require_once("../Model/Mingas.php");
$obj=new Mingas();

$data=array(
    "estado"=>$_POST['estadou'],
    "fecha"=>$_POST['fechau'],
    "idMinga"=>$_POST['idMinga']
);

    echo  $obj->editarMinga($data);

?>
