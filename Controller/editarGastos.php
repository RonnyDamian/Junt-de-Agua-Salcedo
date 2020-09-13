<?php
require_once("../Model/Gasto.php");
$obj=new Gasto();

$data=array(
    "fecha"=>$_POST['fechau'],
    "responsable"=>$_POST['responsableu'],
    "cantidad"=>$_POST['cantidadu'],
    "vUnitario"=>$_POST['vUnitariou'],
    "descripcion"=>$_POST['descripcionu'],
    "idGastos"=>$_POST['idGastos']
);

    echo  $obj->editarGastos($data);


?>
