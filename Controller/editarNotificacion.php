<?php
require_once("../Model/Mingas.php");
$obj=new Notificaciones();

$data=array(
    "fecha"=>$_POST['estadou'],
    "tipo"=>$_POST['tipou'],
    "descripcion"=>$_POST['descripcionu'],
    "idNotificacion"=>$_POST['idNotificacion']
);

    echo  $obj->editarNotificacion($data);

?>
