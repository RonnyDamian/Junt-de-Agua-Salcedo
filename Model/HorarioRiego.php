 <?php

 require_once("../config/Conexion.php");


 class HorarioRiego extends Conexion
 {

     public function mostrarHora()
     {
         $sql = "SELECT 
                idHora,
                CONCAT(horaInicio,':00') AS horaInicio,
                CONCAT(horaFin,':00') AS horaFin
                 FROM t_horas;";
         $sql = Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query = $sql->fetchAll();
         return $query;
     }




 }
?>

