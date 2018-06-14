<?php
    try{
        $conexion =  new PDO('mysql:host=localhost;dbname=pasteleria','root','');
        // echo "Conectado";
        //     $resultado = $conexion->query('SELECT * FROM empleado');
        //   foreach($resultado as $fila){
        //       echo $fila['nombres'] . "<br>";
        //   }

        //PREPARED STATAMENTS
                                                        //playholder
    }catch(PDOException $e){
        echo "Error : " . $e->getMessage();
    }


?>