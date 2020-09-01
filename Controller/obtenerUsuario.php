<?php

require_once("../Model/Usuario.php");
$obj = new Usuario();

$idUsuario=$_POST['idUsuario'];

echo json_encode(Usuario::eliminarUsuario($idUsuario));

?>
