<?php
 require_once ("../Model/Ovalo.php");

 $obj = new Ovalo();
 $data= array(
     "toma"=>$_POST['toma'],
     "derivacion"=>$_POST['derivacion'],
     "canalDer"=>$_POST['canalDer'],
     "subDer"=>$_POST['subDer'],
     "dotacion"=>$_POST['dotacion'],
     "superficie"=>$_POST['superficie'],
     "caudal"=>$_POST['caudal']
 );

 echo  $obj->agregarOvalo($data);



?>
