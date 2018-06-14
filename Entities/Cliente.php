<?php
    class Cliente{
        private $idCliente;
        private $rut;
        private $nombres;
        private $apellidos;
        private $fechaNacimiento;
        private $telefono;
        private $correo;
        private $idComuna;
        private $activo;

        public function getIdCliente(){
			return $this->idCliente;
        }
        
		public function setIdCliente($idCliente){
			$this->idCliente = $idCliente;
        }

        public function getRut(){
			return $this->rut;
		}
        
        public function setRut($rut){
			$this->rut = $rut;
        }

        public function getNombres(){
			return $this->nombres;
        }
        
		public function setNombres($nombres){
			$this->nombres = $nombres;
        }

        public function getApellidos(){
			return $this->apellidos;
        }
        
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
        }

        public function getFechaNacimiento(){
			return $this->fechaNacimiento;
		}
        
        public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
        }

        public function getTelefono(){
			return $this->telefono;
		}
        
        public function setTelefono($telefono){
			$this->telefono = $telefono;
        }

        public function getCorreo(){
			return $this->correo;
		}
        
        public function setCorreo($correo){
			$this->correo = $correo;
        }

        public function getIdComuna(){
			return $this->idComuna;
        }
        
		public function setIdComuna($idComuna){
			$this->idComuna = $idComuna;
        }

        public function getActivo(){
			return $this->activo;
		}
        
        public function setActivo($activo){
			$this->activo = $activo;
        }

        

        public function Cliente($idCliente=0, $rut=0, $nombres=null, $apellidos=null, $fechaNacimiento=0, $telefono=0, $correo=null,$idComuna=0, $activo=0){
			$this->setIdCliente($idCliente);
            $this->setRut($rut);
            $this->setNombres($nombres);
            $this->setApellidos($apellidos);
            $this->setFechaNacimiento($fechaNacimiento);
            $this->setTelefono($telefono);
            $this->setCorreo($correo);
            $this->setIdComuna($idComuna);
			$this->setActivo($activo);
        }

        public function __toString(){
            return 
            "{" . chr(34) . "IdCliente" . chr(34) . ":" . chr(34) . $this->getIdCliente() . chr(34) 
                . "," . chr(34) . "Rut" . chr(34) . ":" . chr(34) . $this->getRut() . chr(34) 
                . "," . chr(34) . "Nombres" . chr(34) . ":" . chr(34) . $this->getNombres() . chr(34) 
                . "," . chr(34) . "Apellidos" . chr(34) . ":" . chr(34) . $this->getApellidos() . chr(34) 
                . "," . chr(34) . "FechaNacimiento" . chr(34) . ":" . chr(34) . $this->getFechaNacimiento() . chr(34) 
                . "," . chr(34) . "Telefono" . chr(34) . ":" . chr(34) . $this->getTelefono() . chr(34) 
                . "," . chr(34) . "Correo" . chr(34) . ":" . chr(34) . $this->getCorreo() . chr(34) 
                . "," . chr(34) . "IdComuna" . chr(34) . ":" . chr(34) . $this->getIdComuna() . chr(34) 
                . "," . chr(34) . "Activo" . chr(34) . ":" . chr(34) . $this->getActivo() . chr(34) 
            . "}";
        }   

        public function imprimir(){
            echo $this->__toString();
        }
    }
?>
