<?php
require_once("../Model/Cobros.php");
$obj=new Cobros();

$data=array(

    "totalPago"=>$_POST['totalPago'],
    "estadoActual"=>$_POST['estadoActual'],
    "lotePago"=>$_POST['lotePago'],
    "valorPago"=>$_POST['valorPago'],
    "idCobro"=>$_POST['idCobro']
);
if($data['totalPago']<$data['valorPago']){
    echo 2;
}else{
    echo  $obj->editarCobro($data);
}


?>
