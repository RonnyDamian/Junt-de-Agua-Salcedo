<?php

require_once "../Model/Usuario.php";

$idUsuario=$_POST['idUsuario'];

echo Usuario::eliminarUsuario($idUsuario);

?>
