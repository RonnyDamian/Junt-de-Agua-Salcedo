 <?php
 require_once("../config/Conexion.php");
error_reporting(0);


 class Mingas extends Conexion{


     public function mostrarMingas(){
         $sql="SELECT 
                        m.idCliente,
                        m.fecha,
                        m.estado,
                        m.idMinga,
                        c.idCliente,
                        c.nombre,
                        c.apellido                        
               FROM t_mingas AS m INNER JOIN t_clientes AS c
               ON m.idCliente=c.idCliente";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }

     public static function obtenerMinga($idMinga){
         $sql="SELECT 
                        m.idCliente,
                        m.fecha,
                        m.estado,
                        m.idMinga,
                        c.idCliente,
                        c.nombre,
                        c.apellido                        
               FROM t_mingas AS m INNER JOIN t_clientes AS c
               ON m.idCliente=c.idCliente
                WHERE idMinga=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idMinga, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarMinga($data){
         $sql="UPDATE t_mingas
              SET estado=?,fecha=? WHERE idMinga=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['estado'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['fecha'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['idMinga'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarMinga($idSesion){
         $sql="DELETE FROM t_mingas WHERE idMinga=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idSesion, PDO::PARAM_INT);
         return $query->execute();
     }

 }

 ?>