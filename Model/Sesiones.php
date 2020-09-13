 <?php
 require_once("../config/Conexion.php");
error_reporting(0);


 class Sesiones extends Conexion{


     public function mostrarSesiones(){
         $sql="SELECT 
                        s.idCliente,
                        s.fecha,
                        s.estado,
                        s.idSesion,
                        c.idCliente,
                        c.nombre,
                        c.apellido                        
               FROM t_sesiones AS s INNER JOIN t_clientes AS c
               ON s.idCliente=c.idCliente";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;


     }

     public static function obtenerSesion($idSesion){
         $sql="SELECT 
                        s.idCliente,
                        s.fecha,
                        s.estado,
                        s.idSesion,
                        c.idCliente,
                        c.nombre,
                        c.apellido                        
               FROM t_sesiones AS s INNER JOIN t_clientes AS c
               ON s.idCliente=c.idCliente
                WHERE idSesion=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idSesion, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarSesion($data){
         $sql="UPDATE t_sesiones
              SET estado=?,fecha=? WHERE idSesion=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['estado'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['fecha'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['idSesion'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarSesion($idSesion){
         $sql="DELETE FROM t_sesiones WHERE idSesion=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idSesion, PDO::PARAM_INT);
         return $query->execute();
     }

 }

 ?>