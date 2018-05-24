<?php

    function listar(){  
        $consultas = new ConsultasC();
        $filas = $consultas->listarProductos();

        echo "<table>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Tamaño</td>
                    <td>Imagen</td>
                    <td>Categoria</td>
                    <td>Precio</td>
                </tr>";
        
        foreach($filas as $fila){
            echo "<tr>";
            echo "<td>".$fila['id_producto']."</td>";
            echo "<td>".$fila['nombre_producto']."</td>";
            echo "<td>".$fila['tamano']."</td>";
            echo "<td>".$fila['imagen']."</td>";
            echo "<td>".$fila['id_categoria']."</td>";
            echo "<td>".$fila['id_precio']."</td>";
            echo "<td><a href='Eliminar.php?id_producto=".$fila['id_producto']."'> Eliminar </td>";
            echo "<td><a href='Modificar.php?id_producto=".$fila['id_producto']."'> Modificar </td>";
        }
    }

        echo "</table>";

        function buscar($nombre_producto)
        {
            $consultas = new ConsultasC();
        $filas = $consultas->buscarProductos($nombre_producto);

        echo "<table>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Tamaño</td>
                    <td>Imagen</td>
                    <td>Categoria</td>
                    <td>Precio</td>
                </tr>";
        
        if(isset($filas)){
            foreach($filas as $fila)
            
               
                    echo "<tr>";
                    echo "<td>".$fila['id_producto']."</td>";
                    echo "<td>".$fila['nombre_producto']."</td>";
                    echo "<td>".$fila['tamano']."</td>";
                    echo "<td>".$fila['imagen']."</td>";
                    echo "<td>".$fila['id_categoria']."</td>";
                    echo "<td>".$fila['id_precio']."</td>";
                    echo "<td><a href='Eliminar.php?id_producto=".$fila['id_producto']."'> Eliminar </td>";
                    echo "<td><a href='Modificar.php?id_producto=".$fila['id_producto']."'> Modificar </td>";

        }
    }
    


        public function modificarProductos()
        {
            $modelo = new ConexionC();
            $conexion = $modelo->conexionbd();
            $sql = "update producto set $arg_campo = :valor where id_producto = :id_producto";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":valor", $arg_valor);
            $statement->bindParam(":id_producto", $arg_id_producto);
            if(!$statement)
            {
                return "Error al modificar";
            }
            else
            {
                $statement->execute();
                return "Producto modificado";

            }

        }
    }


?>