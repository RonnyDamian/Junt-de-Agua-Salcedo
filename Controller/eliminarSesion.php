<?php

require_once "../Model/Sesiones.php";

$idSesion=$_POST['idSesion'];

echo Sesiones::eliminarSesion($idSesion);

?>
