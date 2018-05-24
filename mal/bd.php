<?PHP
    class BD{
    
        private $enlace;
        private $stHost='localhost';
        private $stUsuario='root'; 
        private $stClave='';
        private $stBd='pasteleria';
        private $miRs;
        public function BD(){
		    $this->enlace = new PDO("mysql:host=" . $this->stHost . ";dbname=" .$this->stBd
                                         ,$this->stUsuario
                                         ,$this->stClave);
        }
    }      
?>