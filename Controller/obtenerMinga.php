<?php

require_once("../Model/Mingas.php");
$obj= new Mingas();

$idMinga = $_POST['idMinga'];

echo json_encode(Mingas::obtenerMinga($idMinga));

?>
