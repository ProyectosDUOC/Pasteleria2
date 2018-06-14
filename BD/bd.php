<?php

class BD{
    public static $db;
    private static $stHost='localhost';
    private static $stUsuario='root'; 
    private static $stClave='';
    private static $stBd='pasteleria';
    private static $instancia;

    public function __construct(){
        $this->db = new PDO("mysql:host=" . $this->stHost . ";dbname=" .$this->stBd,$this->stUsuario,$this->stClave);
    }

    public static function getInstancia(){
        if (self::$instancia === null){
            self::$instancia = new BD();
        }
        return self::$instancia;
    }

    /* codigo antiguo
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
    }*/
}

?>