 <?php
 require_once("../config/Conexion.php");
error_reporting(0);


 class Notificaciones extends Conexion{


     public function mostrarNotificaciones(){
         $sql="SELECT * FROM t_notificaciones ";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }

     public static function obtenerNotificacion($idNotificacion){
         $sql="SELECT * FROM t_notificaciones WHERE idNotificacion=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idNotificacion, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarNotificacion($data){
         $sql="UPDATE t_notificaciones
              SET tipo=?,descripcion=?,fecha=? WHERE idNotificacion=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['tipo'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['descripcion'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['fecha'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['idNotificacion'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarNotificacion($idNotificacion){
         $sql="DELETE FROM t_notificaciones WHERE idNotificacion=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idNotificacion, PDO::PARAM_INT);
         return $query->execute();
     }

 }

 ?>