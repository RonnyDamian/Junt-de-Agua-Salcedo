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
     public static function agregarHoraRiego($data){
         $sql="INSERT INTO t_horariego (idCliente,idOvalo,idLote,horaInicio1,horaFin1,diaRiego1,horaInicio2,horaFin2,diaRiego2)
                      VALUES (?,?,?,?,?,?,?,?,?)";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['idCliente'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['idOvalo'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['idLote'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['horaInicio1'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['horaFin1'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['diaRiego1'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['horaInicio2'], PDO::PARAM_STR);
         $sql->bindValue(8, $data['horaFin2'], PDO::PARAM_STR);
         $sql->bindValue(9, $data['diaRiego2'], PDO::PARAM_STR);
         $query=$sql->execute();
         return $query;
     }
     public function mostrarHoraRiego(){
         $sql="SELECT
                        h.idHoraRiego,
                        h.idCliente,
                        h.idOvalo,
                        h.idLote,
                        h.horaInicio1,
                        h.horaFin1,
                        h.diaRiego1,
                        h.horaInicio2,
                        h.horaFin2,
                        h.diaRiego2,
                        c.idCliente,
                        c.nombre,
                        c.apellido,                                             
                        o.idOvalo,
                        o.toma,
                        o.derivacion,
                        o.canalDer,
                        o.subDer,
                        l.idLote,
                        l.clave,
                        l.numLote                        
                         
               FROM t_horariego AS h INNER JOIN t_clientes AS c
               ON h.idCliente=c.idCliente
               INNER JOIN t_ovalos AS o
               ON h.idOvalo=o.idOvalo
               INNER JOIN t_lotes AS l
               ON h.idLote=l.idLote";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }

     public function editarHoraRiego($data){
         $sql="UPDATE t_horariego
              SET idCLiente=?,
                  idOvalo=?,
                  idLote=?,
                  horaInicio1=?,
                  horaFin1=?,                  
                  diaRiego1=?,
                  horaInicio2=?,
                  horaFin2=?,                  
                  diaRiego2=?                  
             WHERE 
                  idHoraRiego=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['idCliente'], PDO::PARAM_INT);
         $sql->bindValue(2, $data['idOvalo'], PDO::PARAM_INT);
         $sql->bindValue(3, $data['idLote'], PDO::PARAM_INT);
         $sql->bindValue(4, $data['horaInicio1'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['horaFin1'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['diaRiego1'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['horaInicio2'], PDO::PARAM_STR);
         $sql->bindValue(8, $data['horaFin2'], PDO::PARAM_STR);
         $sql->bindValue(9, $data['diaRiego2'], PDO::PARAM_STR);
         $sql->bindValue(10, $data['idHoraRiego'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function obtenerHoraRiego($idHoraRiego){
         $sql="SELECT * FROM t_horaRiego WHERE idHoraRiego=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idHoraRiego, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }
     public static function eliminarHoraRiego($idHoraRiego){
         $sql="DELETE FROM t_horaRiego WHERE idHoraRiego=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idHoraRiego, PDO::PARAM_INT);
         return $query->execute();
     }

 }
?>

