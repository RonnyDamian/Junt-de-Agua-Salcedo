<?php

require_once("../Model/Notificaciones.php");
$obj= new Notificaciones();

$idNotificacion = $_POST['idNotificacion'];

echo json_encode(Notificaciones::obtenerNotificacion($idNotificacion));

?>
