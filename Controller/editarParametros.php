<?php
require_once("../Model/Parametro.php");
$obj=new Parametro();

$data=array(
    "tarifa"=>$_POST['tarifau'],
    "valorRiego"=>$_POST['valorRiegou'],
    "multaSesion"=>$_POST['multaSesionu'],
    "multaMinga"=>$_POST['multaMingau'],
    "valorMora"=>$_POST['valorMorau'],
    "idParametro"=>$_POST['idParametro']
);
    echo  $obj->editarParametros($data);

?>
