<?php

    require_once("../DAO/ClienteDAO.php");

    $mensaje = null;
    $rut = $_POST['rut'];
    $opcion = $_POST['opc'];

    switch ($opcion) {
        case "Registrar":
            $nombres = $_POST['nomb'];
            $apellidos = $_POST['apell'];
            $fechaNac = $_POST['fechaNac'];
            $telefono = $_POST['tele'];
            $correo = $_POST['mail'];  
            $comuna = $_POST['comu'];
            if(strlen($rut)>0 && strlen($nombres)>0 && strlen($apellidos)>0 && strlen($fechaNac)>0 && strlen($telefono)>0 && strlen($correo)>0 && strlen($comuna)>0){
                $consultas = new ClienteDAO();
                $mensaje = $consultas->agregarCliente($rut,$nombres,$apellidos,$fechaNac,$telefono,$correo,$comuna);
                echo "Agregado correctamente";
                echo "<br>";
                echo "<a href='../administrador/cliente.html'>Volver a la página anterior</a>";
            }else{
                echo "Completar todos los campos";
                echo "<br>";
                echo "<a href='../administrador/cliente.html'>Volver a la página anterior</a>";
            }
            return $mensaje;
            break;
        case "Ver":
            $consultas = new ClienteDAO();
            $filas = $consultas->listarClientes();
            echo "<h3>Lista de clientes</h3>";
            echo "<table>
                    <tr>
                        <td>Id</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Fecha nacimiento</td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Comuna</td>
                        <td>Activo</td>
                    </tr>";
                foreach($filas as $fila){
                    echo "<tr>";
                    echo "<td>".$fila['idCliente']."</td>";
                    echo "<td>".$fila['rut']."</td>";
                    echo "<td>".$fila['nombres']."</td>";
                    echo "<td>".$fila['fechaNacimiento']."</td>";
                    echo "<td>".$fila['telefono']."</td>";
                    echo "<td>".$fila['correo']."</td>";
                    echo "<td>".$fila['comuna']."</td>";
                    echo "<td>".$fila['activo']."</td>";
                    echo "</tr>";
                }
            echo "</table>";  
            echo "<a href='../administrador/cliente.html'>Volver a la página anterior</a>";     
            break;
        case "Eliminar":
            $consultas = new ClienteDAO();
            $mensaje = $consultas->eliminarCliente($rut);
            echo $mensaje;
            echo "<a href='../administrador/cliente.html'>Volver a la página anterior</a>"; 
            break;
        case "Buscar":
            $consultas = new ClienteDAO();
            $filas = $consultas->buscarCliente($rut);
            echo "<table>
                    <tr>
                        <td>Id</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Fecha nacimiento</td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Comuna</td>
                        <td>Activo</td>
                    </tr>";
                if(isset($filas)){
                    foreach($filas as $fila){
                        echo "<tr>";
                        echo "<td>".$fila['idCliente']."</td>";
                        echo "<td>".$fila['rut']."</td>";
                        echo "<td>".$fila['nombres']."</td>";
                        echo "<td>".$fila['fechaNacimiento']."</td>";
                        echo "<td>".$fila['telefono']."</td>";
                        echo "<td>".$fila['correo']."</td>";
                        echo "<td>".$fila['comuna']."</td>";
                        echo "<td>".$fila['activo']."</td>";
                        echo "</tr>";
                    }
                }
            echo "</table>";  
            echo "<br>";
            echo "<a href='../administrador/cliente.html'>Volver a la página anterior</a>"; 
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