<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='index.php'>Login</a>";
   echo "<br><br><a href='index.php'>Registrarme</a>";
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='login.html'>Necesita Hacer Login</a>";
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/logo.png">
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
</head>

<body>
    <div class="wrapper">

        <div class="sidebar" data-image="../img/logo.png" data-color="local">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="index.html" class="simple-text">
                        <img src="../img/logo.png" width="120px" height="100px" alt=""> Pasteleria Doña Rosa
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <p>Caja</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Bienvenido Administrador
                        <strong>Caja 01</strong>
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
                                    <a class="dropdown-item" href="#">Perfil</a>
                                    <a class="dropdown-item" href="#">Cambio de contraseña</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html">
                                    <span class="no-icon text-danger bg-">
                                        <strong>
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>Salir</strong>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <br>
            <br>
            <br>
            <br>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col py-4">
                           CODIGO DE BOLETA (ejemplo #xxxxx) <input class="form-control" type="text" placeholder="Buscar productos" aria-label="Search">
                        </div>
                        <div class="col py-4">
                            <form action="pedido.html">
                                <button type="submit" class="btn btn-fill btn-danger">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
            
            <br>
            <br>
            <br>
            <br>
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
                            <span class="badge filter badge-red active" data-color="red"></span>
                            <span class="badge filter badge-purple" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>

                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/local/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/local/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/local/sidebar-4.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../img/local/sidebar-5.jpg" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../FrWork/bootstrap/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../FrWork/bootstrap/js/popper.min.js" type="text/javascript"></script>
<script src="../FrWork/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../FrWork/bootstrap/js/plugins/bootstrap-switch.js"></script>
<script src="../FrWork/bootstrap/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../FrWork/bootstrap/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../FrWork/bootstrap/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../FrWork/bootstrap/js/demo.js"></script>

</html>