<?php  
session_start();

require_once('../DAO/ProductoDAO.php');  
require_once('../DAO/ProductoPrecioDAO.php');
require_once('../DAO/ControlEmpleadoDAO.php'); 
require_once('../Entities/ControlEmpleado.php');
require_once('../DAO/CategoriaDAO.php');

require_once('../DAO/EmpleadoDAO.php'); 
require_once('../Entities/Empleado.php');

$nombres = "";



if(isset($_SESSION['login'])){
    $c = $_SESSION['login'];
    $c = unserialize($c);

    if($c->getIdTipo()==4){
        $empleado = EmpleadoDAO::sqlSelect($c->getIdEmpleado());
        $nombres = $empleado->getNombres() . " " . $empleado->getApellidos();

        
        $_SESSION['persona']=null;
        $_SESSION['estado']=null;
        $_SESSION['rut']=null;    
        
        $_SESSION['mensaje']=null;   
        $_SESSION['listar']=null;

    }else{
        header('Location: ../ingresar.php');
    }
}else{
    header('Location: ../ingresar.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pasteria Doña Rosa</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <script src="https://use.fontawesome.com/b48aa89852.js"></script>
    <link href="../FrWork/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../FrWork/bootstrap/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="../FrWork/bootstrap/css/demo.css" rel="stylesheet" />
    <link href="../FrWork/bootstrap/css/style.css" rel="stylesheet" />
    
    <link href="../FrWork/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../img/logo.png" data-color="blue">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        <img src="../img/logo.png" width="120px" height="100px" alt=""> Pasteleria Doña Rosa
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="administrar.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>DESPACHO</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="../index.php" target="_blank">
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
                    <a class="navbar-brand" href="#"> Bienvenido Despacho
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
                                    <a class="dropdown-item" href="../index.php">
                                        <i class="nc-icon nc-simple-remove" aria-hidden="true"></i> Salir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <table class="table table-dark display" id="example" cellspacing="0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center text-dark">
                                                <?php 
                                                  $productos = ProductoDAO::readAll();
                                                  foreach($productos as $tipo){
                                                    echo "<tr>";
                                                        echo "<th scope='row'>" . $tipo->getIdProducto() . "</th>";
                                                        
                                                        $nom = CategoriaDAO::sqlSelect($tipo->getIdCate())->getNombreCate();

                                                        echo "<td>" . $nom . "</td>";
                                                        echo "<td> <img src='../img/productos/" . $tipo->getImagen() . "' alt='' height='70' /></td>";
                                                        echo "<td>" . $tipo->getNombreProducto() . "</td>";
                                                        echo "<td>";
                                                        echo "<div class='form-group py-1'>";
                                                                echo "<button type='submit' data-nombre='". $tipo->getNombreProducto() . "' class='btn btn-fill btn-warning' data-toggle='modal' data-target='#detalles' data-idproducto='".$tipo->getIdProducto()."'>";
                                                                echo "Añadir";
                                                            echo "</button>";
                                                        echo "</div>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                  }
                                                
                                                ?>
                                            </tbody>
                                        </table>
                        </div>
                    </div>
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
                        <img src="../img/productos/Cocteleria/empanaditas_12_unidades.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/productos/Dulceria/donuts.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/productos/Galletas/galletas_finas.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/productos/Tortas/tor_mazapan_chocolate.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/logo.png" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
<script src="../FrWork/bootstrap/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../FrWork/bootstrap/js/popper.min.js" type="text/javascript"></script>
<script src="../FrWork/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../FrWork/bootstrap/js/plugins/bootstrap-switch.js"></script>
<script src="../FrWork/bootstrap/js/plugins/chartist.min.js"></script>
<script src="../FrWork/bootstrap/js/plugins/bootstrap-notify.js"></script>
<script src="../FrWork/bootstrap/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<script src="../FrWork/bootstrap/js/demo.js"></script>


<script src="../FrWork/datatables/jquery.dataTables.js"></script>
<script src="../FrWork/datatables/script.js"></script>
<script>
    $(document).ready(function() {
        // carga plugin Datatable
    $('#example').DataTable();
    });

</script>
</html>