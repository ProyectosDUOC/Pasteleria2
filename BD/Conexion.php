<?php

    class ConexionC{
        public function conexionbd(){
            $user = "root";
            $pass = "";
            $host = "localhost";
            $db = "pasteleria"; 
            $conexion = new PDO("mysql:host=$host; dbname=$db;", $user, $pass);
            return $conexion;
        }

        public function sqlInsertar($insSql){
            $sentencia = $this->enlace->prepare($insSql);
            $resultado = $sentencia->execute();
            if (!$resultado) 
                print_r($sentencia->errorInfo());
            return $this->enlace->lastInsertId();
        }

        
    }

?>