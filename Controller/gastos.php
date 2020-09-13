<?php
 require_once ("../Model/Gasto.php");

 $obj = new Gasto();

 $data= array(
     "fecha"=>$_POST['fecha'],
     "responsable"=>$_POST['responsable'],
     "cantidad"=>$_POST['cantidad'],
     "vUnitario"=>$_POST['vUnitario'],
     "descripcion"=>$_POST['descripcion']
 );

    echo $obj->agregarGastos($data);

?>
