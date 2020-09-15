<?php
 require_once ("../Model/Sesiones.php");

 $obj = new Sesiones();

 $data= array(
     "estado"=>"SI",
     "fecha"=>"2020-09-04",
     "idCliente"=>1,
 );

echo json_encode(Sesiones::agregarSesionMovil($data));

?>
