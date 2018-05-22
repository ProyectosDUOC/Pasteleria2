<?php

class BD{
    private $enlace;
    private $stHost='localhost';
    private $stUsuario='root'; 
    private $stClave='';
    private $stBd='pasteleria';

    public function BD(){
        $this->enlace = new PDO("mysql:host=" . $this->stHost . ";dbname=" .$this->stBd,$this->stUsuario,$this->stClave);
    }

    public function sqlEjecutar($stSql){
        $sentencia = $this->enlace->prepare($stSql);
        $resultado = $sentencia->execute();
        if (!$resultado) 
            print_r($sentencia->errorInfo());
        return $sentencia->rowCount();
    }

    public function sqlInsertar($insSql){
        $sentencia = $this->enlace->prepare($insSql);
        $resultado = $sentencia->execute();
        if (!$resultado) 
            print_r($sentencia->errorInfo());
        return $this->enlace->lastInsertId();
    }

    public function sqlFetch($stSql){
        $sentencia = $this->enlace->prepare($stSql);
        $sentencia->execute();
        return $sentencia->fetch();
    }

    private static $miConexion;

    public static function getInstance(){
        if (self::$miConexion == null){
            self::$miConexion = new BD();
        }
        return self::$miConexion;
    }
}

?>
