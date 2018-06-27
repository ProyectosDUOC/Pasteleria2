<!DOCTYPE html>
<html lang="es-cl">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/logo.png">
    <link rel="icon" type="image/png" href="../favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pasteleria Doña Rosa</title>
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

            <div class="content">
                <div class="container-fluid">
                    <form action>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-user">
                                    <div class="card-image">
                                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../img/local/default-avatar.png" alt="...">
                                        </a>
                                        <h4>Información de Usuario</h4>

                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="modal fade" id="detalles" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" class="text-danger" id="modalnombre">Agregar</h5>
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
                            <button type="submit" name="opcion" value="Agregar" class="btn btn-fill btn-primary" id="botonagregar">Agregar</input>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    $(document).ready(function () {
        // carga plugin Datatable
        $('#example').DataTable();

        // Modal seleccionar productos
        $('#detalles').on('show.bs.modal', function (event) {
            $('#modalselect').empty();
            $('#modalnombre').empty();

            var button = $(event.relatedTarget); // Button that triggered the modal
            var idProd = button.data('idproducto');
            var nombreProd = button.data('nombre');
            $('#modalnombre').append(nombreProd);
            $('#modalprodid').val(idProd);

            $.post("http://<?php echo $_SERVER['SERVER_NAME'] ?>/controladores/infoProducto.php", {
                    opcion: 'variedades',
                    idproducto: idProd
                },
                function (data) {
                    //document.write(data);
                    $('#modalselect').append(data);
                }
            );
        })

    });
</script>

</html>