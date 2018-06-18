<?php

class BD{
    public $db;
    private static $stHost='localhost';
    private static $stUsuario='root'; 
    private static $stClave='';
    private static $stBd='pasteleria';
    private static $instancia;

    public function __construct(){
        $this->db = new PDO("mysql:host=" . self::$stHost . ";dbname=" .self::$stBd,self::$stUsuario,self::$stClave, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public static function getInstancia(){
        if (BD::$instancia === null){
            BD::$instancia = new BD();
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
