<?php
  
  session_start();

  require_once('DAO/TipoUsuarioDAO.php');
  $mensaje = "";

if(isset($_SESSION['mensaje'])){
  $mensaje = $_SESSION['mensaje'];
}
  $_SESSION['login']=null; 
?>
<!DOCTYPE html>
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
  <center>
  <div class="col-4 col-md-4">
        <form class="form-signin" method="post" action="../controladores/login.php" name="login">
          <img class="" src="logo.png" alt="" width="100%">
          <h3 class="text-muted py-2">Acceso Empleado</h3>

          <label for="txtUsuario" class="sr-only">Usuario</label>
          <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Usuario" required autofocus>
          
          <label for="txtPass" class="sr-only">Constraseña</label>
          <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" required>
          
         
          <div>
            <select class="custom-select d-block w-100" id="tipoUsuario" name="txtTipoUsuario" required>
              <option  disabled selected>Tipo Usuario...</option>
              <?php 
                $tipos = TipoUsuarioDAO::readAll();
                foreach($tipos as $tipo){
                  echo "<option value=" . $tipo->getIdTipo() . " >" . $tipo->getNombreTipo() . "</option>";
                }
              ?>
             
            </select>
          </div>
         <br>
         <p class="text-danger"><strong><?php echo $mensaje ?></strong></p>
         <br>
          <input type="submit"  class="btn btn-fill btn-block btn-danger" name="btnInsertar" value="Ingresar" >
          
        </form>
    </div>    
  </center>      
  </section>    
  </body>
</html>