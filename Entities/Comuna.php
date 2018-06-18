<?php
    class Comuna{
        private $idComuna;
        private $nombreComuna;


            
    public function __construct($idComuna, $nombreComuna) {
        $this->idComuna = $idComuna;
        $this->nombreComuna = $nombreComuna;
        
    }

        public function getIdComuna(){
			return $this->idComuna;
		}
		public function setIdComuna($idComuna){
			$this->idComuna = $idComuna;
        }
        
        public function getNombreComuna(){
			return $this->nombreComuna;
		}
		public function setNombreComuna($nombreComuna){
            if($nombreComuna==null || strlen($nombreComuna)>1 && strlen($nombreComuna)<20)
                throw new Exception ("Error, nombre de comuna no cumple con los requisitos");
			$this->nombreComuna = $nombreComuna;
        }

        public function Comuna($idComuna=0, $nombreComuna=null){
			$this->setIdComuna($idComuna);
			$this->setNombreComuna($nombreComuna);
        }

        public function __toString(){
            return 
            "{" . chr(34) . "IdComuna" . chr(34) . ":" . chr(34) . $this->getIdComuna() . chr(34) 
                . "," . chr(34) . "NombreComuna" . chr(34) . ":" . chr(34) . $this->getNombreComuna() . chr(34) 
            . "}";
        }   

  

}

?>