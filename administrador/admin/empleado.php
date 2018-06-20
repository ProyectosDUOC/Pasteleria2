<?php  
session_start();
require_once('../../DAO/ControlEmpleadoDAO.php'); 
require_once('../../DAO/TipoUsuarioDAO.php'); 
require_once('../../Entities/ControlEmpleado.php');
require_once('../../DAO/EmpleadoDAO.php'); 
require_once('../../DAO/ComunaDAO.php'); 
require_once('../../Entities/Empleado.php');

$nombres = "";
$rut = "";
$apellidos = "";
$fechaNac = "";
$telefono = "";
$idComuna = "";
$correo = "";
$activo=1;
$encontrado = "0"; // 0 inicio , 1 encontrado, 2 no encontrado
$persona = new Empleado(0,$rut,$nombres,$apellidos,$fechaNac,$telefono,$idComuna,$correo,$activo); 
$controles = ControlEmpleadoDAO::readAll();
$controlE = null;
$mensaje ="";
if(isset($_SESSION['login'])){
    $c = $_SESSION['login'];
    $c = unserialize($c);

    if($c->getIdTipo()==3){
        $empleado = EmpleadoDAO::sqlSelect($c->getIdEmpleado());
        $nombres = $empleado->getNombres() . " " . $empleado->getApellidos();

        if(isset($_SESSION['estado'])){
            $mensaje = $_SESSION['estado'];
            if($mensaje=="Eliminado"){
                $encontrado=0;
                $persona=null;  
                $controlE = null;   
                            
                $nombres = "";
                $rut = "";
                $apellidos = "";
                $fechaNac = "";
                $telefono = "";
                $idComuna = "";
                $correo = "";
                $activo=1;               
            } if($mensaje=="No Encontrado"){
                $persona=null;  
                $controlE = null;   
                            
                $nombres = "";
                $rut = $_SESSION['rut'];
                $apellidos = "";
                $fechaNac = "";
                $telefono = "";
                $idComuna = "";
                $correo = "";
                $activo=1;        
                $encontrado = 2;       
            }
        }

        if(isset($_SESSION['persona'])){
            $persona = $_SESSION['persona'];
            $persona = unserialize($persona);        

            if ($persona!=null){
                
                foreach($controles as $control){
                    if($control->getIdEmpleado() == $persona->getIdEmpleado()){
                        $controlE = $control;
                        break;
                    }
                }
                $nombres= $persona->getNombres();
                $apellidos=$persona->getApellidos();
                $fechaNac=$persona->getFechaNacimiento();
                $idComuna=$persona->getIdComuna();
                $telefono=$persona->getTelefono();
                $correo=$persona->getCorreo();
                $rut =$persona->getRutEmpleado();
                $encontrado=1;
            }
        }

    }else{
        header('Location: ../../ingresar.php');
    }
}else{
    header('Location: ../../ingresar.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pasteria Doña Rosa</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <script src="https://use.fontawesome.com/b48aa89852.js"></script>
    <link href="../../FrWork/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../FrWork/bootstrap/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="../../FrWork/bootstrap/css/demo.css" rel="stylesheet" />
    <link href="../../FrWork/bootstrap/css/style.css" rel="stylesheet" />
        
    <script>
            function validarRut(string) {//solo letras y numeros
                var out = '';
                //Se añaden las letras validas
                var filtro = '1234567890kK';//Caracteres validos

                for (var i = 0; i < string.length; i++)
                    if (filtro.indexOf(string.charAt(i)) != -1)
                        out += string.charAt(i);
                return out;
            }
        </script>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../../img/logo.png" data-color="blue">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        <img src="../../img/logo.png" width="120px" height="100px" alt=""> Pasteleria Doña Rosa
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../administrar.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Administrar</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="../../index.php" target="_blank">
                            <i class="nc-icon nc-satisfied"></i>
                            <p>Ir a la tienda</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Administrar empleados
                    </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="no-icon">Cuenta</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="no-icon">Configuración</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Cambio de contraseña</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="../../index.php">
                                        <i class="nc-icon nc-simple-remove" aria-hidden="true"></i> Salir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../index.php">
                                    <span class="no-icon text-danger bg-">
                                        <strong>
                                            <i class="nc-icon nc-simple-remove" aria-hidden="true"></i>Salir</strong>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
            <li class="btn btn-fill bg-light"><a href="../../administrador/administrar.php">&larr; Anterior</a></li>
             
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="../../controladores/ControladorEmpleado.php">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="txtRut">Rut</label>
                                        <input type="text" class="form-control" name="txtRut" id="txtRut" value="<?php echo $rut ?>" maxlength="10" placeholder="19000222 (Sin digito verificador y puntos)" onkeyup="this.value = validarRut(this.value)" >
                                    </div>
                                    <div class="form-group col-md-6 py-4">
                                        <button type="submit" class="btn btn-fill btn-danger" name="opcion" value="buscar">Buscar</button>
                                    </div><p class="text-danger"><strong><?php echo $mensaje ?></strong></p>
                                </div>
                                <?php  if($encontrado==1 || $encontrado==2 ){ ?>                                
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="name">Nombres</label>
                                            <input type="text" class="form-control" id="name" name="txtNombres" value="<?php echo $nombres ?>" placeholder="Nombres" >
                                        </div>
                                        <div class="form-group">
                                            <label for="app">Apellidos</label>
                                            <input type="text" class="form-control" id="app" name="txtApellidos" value="<?php echo $apellidos ?>" placeholder="Apellidos" >
                                        </div>
                                        <div class="form-group px-2">
                                            <label for="app">Tipo de Empleado</label>
                                            <select class="custom-select d-block w-100" id="tipoUsuario" name="txtTipoUsuario" required>
                                                <option  disabled selected>Tipo Usuario...</option>
                                                <?php 
                                                    $tipos = TipoUsuarioDAO::readAll();
                                                    foreach($tipos as $tipo){
                                                        if($encontrado==1){
                                                            if($tipo->getIdTipo()==$controlE->getIdTipo() && $encontrado==1){
                                                                echo "<option selected value=" . $tipo->getIdTipo() . " >" . $tipo->getNombreTipo() . "</option>";
                                                       
                                                            }else{
                                                                echo "<option value=" . $tipo->getIdTipo() . " >" . $tipo->getNombreTipo() . "</option>";
                                                       
                                                            }
                                                        } else{
                                                            echo "<option value=" . $tipo->getIdTipo() . " >" . $tipo->getNombreTipo() . "</option>";
                                                        }                                                       
                                                   }
                                                ?>                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="fecha">Fecha Nacimiento</label>
                                            <input type="date" name="txtFechaNac" value="<?php echo $fechaNac ?>" class="form-control" id="fecha">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputState">Comuna</label>
                                            <select id="inputState" class="form-control" name="txtComuna">
                                                <option  disabled selected>Seleccione una comuna...</option>
                                                   <?php $comunas = ComunaDAO::readAll();
                                                        foreach($comunas as $c){ 
                                                            if($encontrado==1){
                                                                if($c->getIdComuna()==$idComuna){
                                                                    echo "<option selected value=". $c->getIdComuna() ."> " . $c->getNombreComuna() . " </option>";
                                                                  }else{
                                                                      echo "<option value=". $c->getIdComuna() ."> " . $c->getNombreComuna() . " </option>";
                                                                  }
                                                            }else{
                                                                echo "<option value=". $c->getIdComuna() ."> " . $c->getNombreComuna() . " </option>";
                                                            }
                                                        }
                                                   
                                                   ?>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="tel">Telefono</label>
                                            <input type="number" name="txtTelefono" value="<?php echo $telefono ?>" class="form-control" id="telefono">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tel">Correo</label>
                                            <input type="email" name="txtCorreo" value="<?php echo $correo ?>" class="form-control" id="comuna">
                                        </div>
                                    </div>
                                    <?php if($encontrado==1){ ?>                                        
                                        <button  type="button"  class="btn btn-lg  btn-fill btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
                                        <button class="btn btn-lg  btn-fill btn-warning" name="opcion" value="modificar">Modificar</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Desea Eliminar</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Eliminar Empleado <?php echo $nombres . " " . $apellidos ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button name="opcion" value="eliminar" class="btn btn-primary">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } 
                                       if($encontrado==2){?>
                                             <button class="btn btn-lg  btn-fill btn-success" name="opcion" value="agregar">Agregar</button>
                                  
                                           <?php   }
                               } ?> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-3">
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Desarrolladores
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Consultas
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">
                                <strong>BlueHat</strong>
                            </a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title">Barra Personalizada</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Imagen de fondo</p>
                        <label class="switch">
                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <p>Colores</p>
                        <div class="pull-right">
                            <span class="badge filter badge-black" data-color="black"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-purple active" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>

                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../../img/productos/Cocteleria/empanaditas_12_unidades.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../../img/productos/Dulceria/donuts.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../../img/productos/Galletas/galletas_finas.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../../img/productos/Tortas/tor_mazapan_chocolate.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../../img/logo.png" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
<script src="../../FrWork/bootstrap/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../FrWork/bootstrap/js/popper.min.js" type="text/javascript"></script>
<script src="../../FrWork/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../FrWork/bootstrap/js/plugins/bootstrap-switch.js"></script>
<script src="../../FrWork/bootstrap/js/plugins/chartist.min.js"></script>
<script src="../../FrWork/bootstrap/js/plugins/bootstrap-notify.js"></script>
<script src="../../FrWork/bootstrap/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<script src="../../FrWork/bootstrap/js/demo.js"></script>
<script> 
$('#myModal').modal(options)
</script>
</html>