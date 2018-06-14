<?php

    $id = 1;
    try{
        $conexion =  new PDO('mysql:host=localhost;dbname=pasteleria','root','');
        // echo "Conectado";
        //     $resultado = $conexion->query('SELECT * FROM empleado');
        //   foreach($resultado as $fila){
        //       echo $fila['nombres'] . "<br>";
        //   }

        //PREPARED STATAMENTS
                                                        //playholder
        $statement = $conexion->prepare('SELECT * FROM empleado WHERE id_empleado=:id_empleado');
        $statement->execute(
            array(':id_empleado'=> $id)
            );
        $resultados = $statement->fetch();
        echo "<pre>";
        print_r($resultados);
        echo "</pre>";

    }catch(PDOException $e){
        echo "Error : " . $e->getMessage();
    }


?>