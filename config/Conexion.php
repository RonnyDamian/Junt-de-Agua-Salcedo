<?php

class Conexion{

     public function conectar(){
          define("HOST","127.0.0.1:3306");
          define('DBNAME','juntaauga');
          define('USERNAME', 'root');
          define('PASSWORD','12345');
         try {
             $connectionString="mysql:host=".HOST. ";dbname=". DBNAME .";charset=utf8";
             $conexion = new PDO($connectionString, USERNAME, PASSWORD);
             $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $conexion;
         }catch(PDOException $exception){
            echo "Error de conexión: ". $exception->getMessage() ."<br>";
            echo "Error en la linea:" .$exception->getLine();
            die();
         }

     }

}


?>
