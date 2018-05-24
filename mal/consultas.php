<?php 

    require_once('conexion.php');

    class ConsultasC{
        public function agregarProducto($id,$nombre,$tamaño,$imagen,$idcategoria,$precio){
            $modelo = new ConexionC();
            $conexion = $modelo->conexionbd();
            $sql = "insert into Producto(id_producto,nombre_producto,tamano,imagen,id_categoria,id_precio) values(:id_producto,:nombre_producto,:tamano,:imagen,:id_categoria,:precio)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id_producto', $id);
            $statement->bindParam(':nombre_producto', $nombre);
            $statement->bindParam(':tamano', $tamaño);
            $statement->bindParam(':imagen', $imagen);
            $statement->bindParam(':id_categoria', $idcategoria);
            $statement->bindParam(':precio', $precio);
            

            if($statement->execute()){
                return "Agregado";
                echo "Agregado";
            }else {
                return " error";
                echo "error";
            }


        }

        public function listarProductos(){
            $row = null;
            $modelo = new ConexionC();
            $conexion = $modelo->conexionbd();
            $sql = "select * from producto";
            $statement = $conexion->prepare($sql);
            $statement->execute();

            while($resultado=$statement->fetch()){
                $row[] = $resultado;
            }
            return $row;
        }

        public function eliminarProducto($arg_id_producto){
            $modelo = new ConexionC();
            $conexion = $modelo->conexionbd();
            $sql = "delete from producto where id_producto = :id_producto";
            $statement = $conexion->prepare($sql);
            $statement-> bindParam(':id_producto', $arg_id_producto);
            if(!$statement){
                return "Error al eliminar";
            }
            else{
                $statement->execute();
                return "producto eliminado";
            }
        }

        public function buscarProductos($arg_nombre_producto)
        {
            $rows=null;
            $modelo = new ConexionC();
            $conexion = $modelo->conexionbd();
            $nombre = "%".$arg_nombre_producto."%";
            $sql = "select * from producto where nombre_producto like :nombre_producto";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":nombre_producto", $nombre);
            $statement->execute();
            while($result = $statement->fetch())
            {
                $rows[] = $result;
            }
            return $rows;
        }

    }

?>