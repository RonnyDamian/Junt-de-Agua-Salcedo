<?php

require_once "../Model/Notificaciones.php";

$idNotificacion=$_POST['idNotificacion'];

echo Notificaciones::eliminarNotificacion($idNotificacion);

?>
