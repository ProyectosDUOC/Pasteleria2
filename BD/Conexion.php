<?php
    class BD{
        private $enlace;
        private $stHost='localhost';
        private $stUsuario='root'; 
        private $stClave='';
        private $stBd='pasteleria';

        public function BD()
        {
            $this->enlace = new PDO("mysql:host=" . $this->stHost . ";dbname=" .$this->stBd ,$this->stUsuario ,$this->stClave);
        }

        public static function getInstance(){
            if (self::$miConexion == null){
                self::$miConexion = new BD();
            }
            return self::$miConexion;
        }
        
    }

   
?> 
