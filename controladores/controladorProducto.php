<?php

/*require_once($rootDir . "/DAO/ProductoDAO.php");*/

require_once("../DAO/ProductoDAO.php");
   
$mensaje = null;

    $opcion = $_POST['btn'];

    $idProducto = $_POST['idProducto'];
    $codProducto = $_POST['codProducto'];
    $nombre = $_POST['nombreProducto'];
    $imagen = $_POST['nombreProducto'];
    $tamano = $_POST['tamaño'];  
    $activo = 1;
    $categoria = $_POST['categoria'];

    switch ($opcion) {
        case "Agregar":

           
            
                $consultas = new ProductoDAO();
               
               
                ProductoDAO::sqlInsert($idProducto,$codProducto,$nombre,$imagen,$tamano,$activo,$categoria);
               
                echo "Agregado correctamente";
                echo "<br>";
                echo $idProducto;
                echo "<br>";
                echo $codProducto;
                echo "<br>";
                echo $nombre;
                echo "<br>";
                echo $imagen;
                echo "<br>";
                echo $tamano;
                echo "<br>";
                echo $activo;
                echo "<br>";
                echo $categoria;
                echo "<br>";
                echo "<a href='../administrador/Producto.html'>Volver a la página anterior</a>";
           
            return $mensaje;
            break;
        case "Listar":
            $consultas = new ProductoDAO();
            $filas = $consultas->listarProductos();
            echo "<h3>Lista de Productos</h3>";
            echo "<table>
                    <tr>
                        <td>Id</td>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Imagen</td>
                        <td>Tamaño</td>
                        <td>Activo</td>
                        <td>Categoria</td>
                    </tr>";
                foreach($filas as $fila){
                    echo "<tr>";
                    echo "<td>".$fila['id_producto']."</td>";
                    echo "<td>".$fila['cod_producto']."</td>";
                    echo "<td>".$fila['nombre_producto']."</td>";
                    echo "<td>".$fila['imagen']."</td>";
                    echo "<td>".$fila['tamano']."</td>";
                    echo "<td>".$fila['activo']."</td>";
                    echo "<td>".$fila['id_cate']."</td>";
                    echo "</tr>";
                }
            echo "</table>";  
            echo "<a href='../administrador/Producto.html'>Volver a la página anterior</a>";     
            break;

            case "Eliminar":
            $consultas = new ProductoDAO();
            $mensaje = $consultas->eliminarProducto($idProducto);
            echo $mensaje;
            echo "<a href='../administrador/Producto.html'>Volver a la página anterior</a>"; 
            break;

        case "Buscar":
            $consultas = new ProductoDAO();
            $filas = $consultas->buscarProducto($idProducto);
            echo "<table>
                    <tr>
                    <td>Id</td>
                    <td>Codigo</td>
                    <td>Nombre</td>
                    <td>Imagen</td>
                    <td>Tamaño</td>
                    <td>Activo</td>
                    <td>Categoria</td>
                    </tr>";
                if(isset($filas)){
                    foreach($filas as $fila){
                        echo "<tr>";
                        echo "<td>".$fila['id_producto']."</td>";
                        echo "<td>".$fila['cod_producto']."</td>";
                        echo "<td>".$fila['nombre_producto']."</td>";
                        echo "<td>".$fila['imagen']."</td>";
                        echo "<td>".$fila['tamano']."</td>";
                        echo "<td>".$fila['activo']."</td>";
                        echo "<td>".$fila['id_cate']."</td>";
                        echo "</tr>";
                    }
                }
            echo "</table>";  
            echo "<br>";
            echo "<a href='../administrador/producto.html'>Volver a la página anterior</a>"; 
            break;

        case "Modificar":
            if(isset($_POST['rut'])){
                $consultas = new ClienteDAO();
                $rut = $_POST['rut'];
    
                $filas = $consultas->modificarCliente($rut);
    
                foreach ($filas as $fila) {
    
                    echo ' 
                        <form method="POST" action="modificarCliente.php"> 
                            <h3>Cliente</h3>
                            <table>
                                <tr>
                                    <td>Rut</td>
                                    <td><input type="text" name="rut" id="rut" value="'.$fila['rut'].'"></td>
                                </tr>
                                <tr>
                                    <td>Nombres</td>
                                    <td><input type="text" name="nomb" id="nomb" value="'.$fila['nombres'].'"></td>
                                </tr>
                                <tr>
                                    <td>Apellidos</td>
                                    <td><input type="text" name="apell" id="apell" value="'.$fila['apellidos'].'"></td>
                                </tr>
                                <tr>
                                    <td>Fecha de nacimiento</td>
                                    <td><input type="date" name="fechaNac" id="fechaNac" value="'.$fila['fechaNacimiento'].'"></td>
                                </tr>
                                <tr>
                                    <td>Telefono</td>
                                    <td><input type="number" name="tele" id="tele" value="'.$fila['telefono'].'"></td>
                                </tr>
                                <tr>
                                    <td>Correo</td>
                                    <td><input type="email" name="mail" id="mail" value="'.$fila['correo'].'"></td>
                                </tr>
                                <tr>
                                    <td>Comuna</td>
                                    <td><input type="text" name="comu" id="comu" value="'.$fila['comuna'].'"></td>
                                </tr>
                            </table>
                            <button type="submit" value="Modificar" name="opc" >Modificar cliente</button>
                            <br>
                        </form> '; 
    
                }
    
                
            }
            break;
    }

    
?>