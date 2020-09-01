<?php
require_once("../Model/Ovalo.php");
$obj=new Ovalo();

$data=array(
    "toma"=>$_POST['tomau'],
    "derivacion"=>$_POST['derivacionu'],
    "canalDer"=>$_POST['canalDeru'],
    "subDer"=>$_POST['subDeru'],
    "dotacion"=>$_POST['dotacionu'],
    "superficie"=>$_POST['superficieu'],
    "caudal"=>$_POST['caudalu'],
    "idOvalo"=>$_POST['idOvalo']
);

    echo  $obj->editarOvalo($data);

?>
