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

 }

 ?>