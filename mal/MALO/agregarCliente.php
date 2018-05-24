<?php
    /*require_once("bd.php");
    $bd = new BD(); 
    $sql = "insert into producto(id_producto ,nombre_producto ,nombres ,apellidos, fechaNacimiento, telefono, correo, comuna,activo)values(07854,'1-1','patricia','campos','98-05-03',555,'jakja',45,1)";
    $resultado  = $bd->sqlEjecutar($sql);
     
    if ($resultado) {
       echo "Registro Insertado resultado :" .$resultado . "<br>";
    }
     else {
        echo "Registro Error Insert "  . "<br>";
         
    }
    $resultado  =$bd->sqlEjecutar($sql);*/

    require_once("Cliente.php");
    require_once("ClienteDAO.php");

    $ru=$_POST["rut"];
    $nom=$_POST["nombres"];
    $ape=$_POST["apellidos"];
    $feNac=$_POST["fechaNac"];
    $tele=$_POST["telefono"];
    $corr=$_POST["correo"];
    $comuna=$_POST["comuna"];
    $act=1;

    $clien=new Cliente();

    $clien->setRut($ru);
    $clien->setNombres($nom);
    $clien->setApellidos($ape);
    $clien->setFechaNacimiento($feNac);
    $clien->setTelefono($tele);
    $clien->setCorreo($corr);
    $clien->setIdComuna($comuna);
    $clien->setActivo($act);

    ClienteDAO::sqlInsert($clien);

    header("location:Cliente.html");

?>