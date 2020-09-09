<?php
 require_once ("../Model/HorarioRiego.php");

 $obj = new HorarioRiego();
 $data= array(
     "idCliente"=>$_POST['idClienteu'],
     "idOvalo"=>$_POST['idOvalou'],
     "idLote"=>$_POST['idLoteu'],
     "horaInicio1"=>$_POST['horaInicio1u'],
     "horaFin1"=>$_POST['horaFin1u'],
     "diaRiego1"=>$_POST['diaRiego1u'],
     "horaInicio2"=>$_POST['horaInicio2u'],
     "horaFin2"=>$_POST['horaFin2u'],
     "diaRiego2"=>$_POST['diaRiego2u'],
     "idHoraRiego"=>$_POST['idHoraRiego']
 );
$horaInicio = floatval($data['horaInicio1']);
$horaFin=floatval($data['horaFin1']);
$horaInicio2 = floatval($data['horaInicio2']);
$horaFin2=floatval($data['horaFin2']);
$hora1 = $horaFin-$horaInicio;
$hora2 =$horaFin2-$horaInicio2;

if(($horaInicio>=$horaFin) || ($horaInicio2>=$horaFin2)){
 echo 2;
}elseif(($hora1!=$hora2)){
 echo 3;
}
else{
 echo $obj->editarHoraRiego($data);
}
?>
