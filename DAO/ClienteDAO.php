<?php 

    require_once("../BD/conexion.php");

    class ClienteDAO{
        public function agregarCliente($rut,$nombres,$apellidos,$fechaNacimiento,$telefono,$correo,$comuna){
            $modelo = new Conexion();
            $conexion = $modelo->conexionbd();
            $sql = "insert into cliente(rut,nombres,apellidos,fechaNacimiento,telefono,correo,comuna,activo) values(:rut,:nombres,:apellidos,:fechaNacimiento,:telefono,:correo,:comuna,1)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':rut', $rut);
            $statement->bindParam(':nombres', $nombres);
            $statement->bindParam(':apellidos', $apellidos);
            $statement->bindParam(':fechaNacimiento', $fechaNacimiento);
            $statement->bindParam(':telefono', $telefono);
            $statement->bindParam(':correo', $correo);
            $statement->bindParam(':comuna', $comuna);

            if(!$statement){
                return "Error";
            }else {
                $statement->execute();
                return "Agregado correctamente";
            }
        }

        public function listarClientes(){
            $row = null;
            $modelo = new Conexion();
            $conexion = $modelo->conexionbd();
            $sql = "select * from cliente";
            $statement = $conexion->prepare($sql);
            $statement->execute();

            while($resultado=$statement->fetch()){
                $row[] = $resultado;
            }
            return $row;
        }

        public function eliminarCliente($rut){
            $modelo = new Conexion();
            $conexion = $modelo->conexionbd();
            $sql = "delete from cliente where rut = :rut";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':rut', $rut);
            if(!$statement){
                return "Error al eliminar";
            }else {
                $statement->execute();
                return "Eliminado correctamente";
            }
        }

        public function buscarCliente($rut){
            $row = null;
            $modelo = new Conexion();
            $conexion = $modelo->conexionbd();
            $r = "%".$rut."%";
            $sql = "select * from cliente where rut like :rut";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':rut', $r);
            $statement->execute();
            while($resultado=$statement->fetch()){
                $row[] = $resultado;
            }
            return $row;
        }

        public function modificarCliente($rut){
            $row = null;
            $modelo = new Conexion();
            $conexion = $modelo->conexionbd();
            $sql = "select * from cliente where rut like :rut";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':rut',$rut);
            $statement->execute();

            while($resultado=$statement->fetch()){
                $row[] = $resultado;
            }
            return $row;
        }

        public function modificarCliente2($tel){
            $modelo = new Conexion();
            $conexion = $modelo->conexionbd();
            $sql = "update cliente set $tel = :valor where rut = :rut";
            $statement = $conexion->prepare($sql);
            if(!$statement){
                return "Error al modificar";
            }else {
                $statement->execute();
                return "Modificado correctamente";
            }
        }

    }

?>