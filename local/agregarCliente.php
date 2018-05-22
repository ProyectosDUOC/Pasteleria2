<?php
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