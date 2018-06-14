<!DOCTYPE html>
<?php 
  require("DAO/ControlEmpleadoDAO.php");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pasteleria Doña Rosa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="FrWork/bootstrap/css/bootstrap.css" />    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <section class="container">
    <div class="col-12">
        <form class="form-signin" method="post" action="" name="login">
          <img class="" src="logo.png" alt="" width="260" height="230">
          <h3 class="text-muted py-2">Acceso Empleado</h3>

          <label for="txtUsuario" class="sr-only">Usuario</label>
          <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Usuario" required autofocus>
          
          <label for="txtPass" class="sr-only">Constraseña</label>
          <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" required>
          
          <label for="txtTipo" class="sr-only">Tipo Usuario</label>
          <input type="number" id="txtTipo" name="txtTipo" class="form-control" placeholder="tipo usuario" required autofocus>
        
          <input type="submit"  class="btn btn-fill btn-block btn-danger" name="btnInsertar" value="Ingresar" >
         
        </form>
    </div>      
  </section>    
  </body>
</html>

<?php

$dao = new ControlEmpleadoDAO();
function cargar(){
  $control = new ControlEmpleado();
  $control->setUsuario($_REQUEST["txtUsuario"]);
  $control->setClave($_REQUEST["txtPass"]);
  $control->setTipoUsuario($_REQUEST["txtTipo"]);
  return $control;
}



?>