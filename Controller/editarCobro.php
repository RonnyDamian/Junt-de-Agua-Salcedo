<?php
require_once("../Model/Cobros.php");
$obj=new Cobros();


$data=array(

    "totalPago"=>$_POST['totalPago'],
    "estadoActual"=>$_POST['estadoActual'],
    "valorPago"=>$_POST['valorPago'],
    "numLote"=>$_POST['listLotes'],
    "idCliente"=>$_POST['idCliente'],
    "idCobro"=>$_POST['idCobro']
);
if($data['totalPago']<$data['valorPago']){
    echo 2;
} else{
    echo $obj->editarCobro($data);
}


?>
