<?php
require_once("../Model/Lote.php");
$obj=new Lote();

$data=array(
    "idCliente"=>$_POST['idClienteu'],
    "clave"=>$_POST['claveu'],
    "numLote"=>$_POST['numLoteu'],
    "superficie"=>$_POST['superficieu'],
    "precio"=>$_POST['preciou'],
    "idOvalo"=>$_POST['idOvalou'],
    "idLote"=>$_POST['idLote']

);

    echo $obj->editarLote($data);

?>
