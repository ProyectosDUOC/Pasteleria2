<?php

<<<<<<< HEAD
    class ConexionC{
=======
    class Conexion{
>>>>>>> feed23fbda0c5d1461be9a21198dee53d52d2917
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
<<<<<<< HEAD

        
    }

?>
=======
    }

?>
>>>>>>> feed23fbda0c5d1461be9a21198dee53d52d2917
