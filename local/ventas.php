<?php
    session_start();   

    require_once('../DAO/ProductoDAO.php');  
    require_once('../DAO/ProductoPrecioDAO.php');
    require_once('../DAO/CategoriaDAO.php');

    require_once('../DAO/BoletaDAO.php');
    require_once('../DAO/DetalleBoletaDAO.php');

    $carrito = array();

    
    if(isset($_SESSION['carrito'])){
        $carrito = $_SESSION['carrito'];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['opcion'])){
            if($_POST['opcion']=='Agregar'){
                $carrito[] = array("idprodp" => $_POST['variedad'], "cant" => $_POST['cantidad']);
            }
            if($_POST['opcion']=='Cancelar'){
                $carrito = array();
            }
            if($_POST['opcion']=='Finalizar'){
                // generar boleta

                $idVend = 1; // unserialize vendedor
                $formPago = 1; // forma de pago
                $idSucu = 1; // sucursal

                $nuevoIdBoleta = BoletaDAO::lastId() + 1;

                //se crea nueva boleta vacia
                $nuevaBoleta = new Boleta($nuevoIdBoleta,0,$idVend,$formPago,$idSucu);
                BoletaDAO::sqlInsert($nuevaBoleta);

                $total_final = 0;

                foreach ($carrito as $item) {
                    $idprodp_i = $item['idprodp'];
                    $cant_i = $item['cant'];

                    $prodPrecio = ProductoPrecioDAO::sqlSelect();

                    $precio_i = $prodPrecio->getPrecio();
                    $total_i = $precio_i * $cant_i;

                    $nuevoIdDetalle = DetalleBoletaDAO::lastId() + 1;
                    $nuevoDetalle = new DetalleBoleta($nuevoIdDetalle,$idprod_p,$nuevoIdBoleta,$precio_i,$cant_i,$total_i);
                    DetalleBoletaDAO::sqlInsert($nuevoDetalle);
                    $total_final += $total_i;
                }

                $nuevaBoleta->setTotal($total_final);
                BoletaDAO::sqlUpdate($nuevaBoleta);
                header('Location: ../local/index.php');
            }
        }
        if(isset($_POST['eliminar'])){
            $num = $_POST['eliminar'];
            unset($carrito[$num-1]);
        }
    }

    $_SESSION['carrito'] = $carrito;

?>
<!DOCTYPE html>
<html lang="es-cl">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/logo.png">
    <link rel="icon" type="image/png" href="../favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pasteleria Doña Rosa</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
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
        <div class="sidebar" data-image="../img/logo.png" data-color="local">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="index.php" class="simple-text">
                        <img src="../img/logo.png" width="120px" height="100px" alt=""> Pasteleria Doña Rosa
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="ventas.php">
                            <i class="nc-icon nc-tap-01" aria-hidden="true"></i>
                            <p>Nueva venta</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pedidos.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Crear Pedido</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Bienvenido Vendedor
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
                                    <a class="dropdown-item" href="#">
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
            <div class="content container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h4 class="colorC text-center">
                                <strong>PRODUCTOS</strong>
                            </h4>
                            <br>
                            <div class="card-deck text-center  card colorC">
                               
                                <div>                                    
                                    <div>
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
                    </div>
                    <!--BOLETAS -->
                    <div class="col-md-10">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                            </div>
                            <div class="card-body">
                                <form method="POST" action="ventas.php">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../img/local/faces/face-0.jpg" alt="...">
                                            <h5 class="title">Boleta</h5>
                                        </a>
                                        <p class="description">
                                            Detalle de la boleta
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Sonrie Siempre!"
                                    </p>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Variedad</th>
                                                <th scope="col">Cantidad.</th>
                                                <th scope="col">Valor unitario</th>
                                                <th scope="col">Valor</th>
                                                <<th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                                $num = 1;
                                                $total=0;
                                                foreach ($carrito as $item) {
                                                    $prodPrecio = ProductoPrecioDAO::sqlSelect($item['idprodp']);
                                                    $prod = ProductoDAO::sqlSelect($prodPrecio->getIdProducto());
                                                    $precioUnit = $prodPrecio->getPrecio();
                                                    echo "<tr>";
                                                    echo "<td>" . $num . "</td>";
                                                    echo "<td>" . $prod->getNombreProducto() . "</td>";
                                                    echo "<td>" . $prodPrecio->getDescripcion() . "</td>";
                                                    echo "<td>" . $item['cant'] . "</td>";
                                                    echo "<td>" . $precioUnit . "</td>";
                                                    echo "<td>" . $precioUnit * $item['cant'] . "</td>";
                                                    echo "<td><button type='submit' name='eliminar' value='". $num ."' class='btn btn-light' >";
                                                    echo "<i class='fa fa-trash' aria-hidden='true'></i></td>";
                                                    echo "</tr>";
                                                    $num++;
                                                    $total += $precioUnit * $item['cant'];
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <h5 class="text-center">Total:
                                        <strong>$<?php echo $total ?></strong>
                                    </h5>
                                    <hr>
                                    <div class="button-container mr-auto ml-auto">
                                        <button type="submit" name="opcion" value="Finalizar" class="btn btn-info btn-fill pull-left btn-success">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            Finalizar Venta
                                        </button>
                                        <button type="submit" name="opcion" value="Cancelar" class="btn btn-danger btn-fill pull-right btn-warning">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            Cancelar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="detalles" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalnombre">Agregar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="ventas.php">
                    <input id="modalprodid" name="prodId" type="hidden">
                    <div class="modal-body">                        
                        <div class="form-group">
                            <select class="form-control" id="modalselect" name="variedad">
                                <!-- AJAX rellena aqui -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad a llevar</label>
                            <input type="number" min='1' name="cantidad" class="form-control" id="modalcantidad" maxlength="2" value="1">
                        </div>
                                                
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="opcion" value="Agregar" class="btn btn-primary" id="botonagregar">Agregar</input>
                    </div>                    
                </form>

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
                <li class="header-title">Barra de imagenes</li>

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

        // Modal seleccionar productos
        $('#detalles').on('show.bs.modal', function (event) {
            $('#modalselect').empty();
            $('#modalnombre').empty();

            var button = $(event.relatedTarget); // Button that triggered the modal
            var idProd = button.data('idproducto');
            var nombreProd = button.data('nombre') ;
            $('#modalnombre').append(nombreProd);
            $('#modalprodid').val(idProd);

            $.post("http://<?php echo $_SERVER['SERVER_NAME'] ?>/controladores/infoProducto.php",
                    {opcion:'variedades',idproducto:idProd},
                    function(data){
                        //document.write(data);
                        $('#modalselect').append(data);
                    }
            );
        })

} );
</script>
</html>