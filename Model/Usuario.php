 <?php

 require_once("../config/Conexion.php");
error_reporting(0);

 class Usuario extends Conexion{

     public function login($data){
         $sql ="SELECT email, password FROM t_usuarios WHERE email=? AND password=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['email'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['password'], PDO::PARAM_STR);
         $query=$sql->execute();
         $query=$sql->fetch(PDO::FETCH_ASSOC);

         return $query;
     }
     public static function validaEmail_Usuario($data){
         $sql ="SELECT * FROM t_usuarios WHERE email=? or usuario=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['email'],PDO::PARAM_STR);
         $sql->bindValue(2,$data['usuario'],PDO::PARAM_STR);
         $sql->execute();
         $query=$sql->fetchAll(PDO::FETCH_ASSOC);
         return $query;
     }

     public static function agregarUsuario($data){
         $sql="INSERT INTO t_usuarios (nombre,apellido,cedula,telefono,celular,direccion,email,usuario,password)
                      VALUES (?,?,?,?,?,?,?,?,?)";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['nombre'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['apellido'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['cedula'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['telefono'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['celular'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['direccion'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['email'], PDO::PARAM_STR);
         $sql->bindValue(8, $data['usuario'], PDO::PARAM_STR);
         $sql->bindValue(9, $data['password'], PDO::PARAM_STR);
         $query=$sql->execute();
        return $query;
     }
     public function mostrarUsuarios(){
         $sql="SELECT * FROM t_usuarios";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }
     public static function obtenerUsuario($idUsuario){
         $sql="SELECT * FROM t_usuarios WHERE idUsuario=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idUsuario, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarUsuario($data){
         $sql="UPDATE t_usuarios
              SET nombre=?,
                  apellido=?,
                  cedula=?,
                  telefono=?,
                  celular=?,
                  direccion=?,
                  email=?
             WHERE 
                  idUsuario=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['nombre'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['apellido'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['cedula'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['telefono'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['celular'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['direccion'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['email'], PDO::PARAM_STR);
         $sql->bindValue(8, $data['idUsuario'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarUsuario($idUsuario){
         $sql="DELETE FROM t_usuarios WHERE idUsuario=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idUsuario, PDO::PARAM_INT);
         return $query->execute();
     }


 }

 ?>