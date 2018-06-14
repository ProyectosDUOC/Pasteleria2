<!DOCTYPE html>
<html lang="es">

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
                        <a class="nav-link" href="venta.html">
                            <i class="nc-icon nc-tap-01" aria-hidden="true"></i>
                            <p>Nueva venta</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="agregarUsuario.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Usuario</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pedidos.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Pedidos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="reservas.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Reservas</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="../index.html" target="_blank">
                            <i class="nc-icon nc-satisfied"></i>
                            <p>Ir a la tienda</p>
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
                                <a class="nav-link" href="../index.html">
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
                                <nav>
                                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                        <a class="nav-item colorC nav-link active" id="nav-torta-tab" data-toggle="tab" href="#nav-torta" role="tab" aria-controls="nav-torta"
                                            aria-selected="true">
                                            <strong>Tortas</strong>
                                        </a>
                                        <a class="nav-item colorC nav-link" id="nav-masas-tab" data-toggle="tab" href="#nav-masas" role="tab" aria-controls="nav-masas"
                                            aria-selected="false">
                                            <strong>Masas</strong>
                                        </a>
                                        <a class="nav-item colorC nav-link" id="nav-galletas-tab" data-toggle="tab" href="#nav-galletas" role="tab" aria-controls="nav-galletas"
                                            aria-selected="false">
                                            <strong>Galletas</strong>
                                        </a>
                                        <a class="nav-item colorC nav-link" id="nav-cocteleria-tab" data-toggle="tab" href="#nav-cocteleria" role="tab" aria-controls="nav-cocteleria"
                                            aria-selected="false">
                                            <strong>Coctelería</strong>
                                        </a>
                                        <a class="nav-item colorC nav-link" id="nav-dulceria-tab" data-toggle="tab" href="#nav-dulceria" role="tab" aria-controls="nav-dulceria"
                                            aria-selected="false">
                                            <strong>Dulcería</strong>
                                        </a>
                                        <a class="nav-item colorC nav-link" id="nav-bebida-tab" data-toggle="tab" href="#nav-bebida" role="tab" aria-controls="nav-bebida"
                                            aria-selected="false">
                                            <strong>Bebestible</strong>
                                        </a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-torta" role="tabpanel" aria-labelledby="nav-tortas-tab">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Cantidad Personas / Precio $</th>
                                                    <th scope="col">Cantidad a llevar</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="../img/productos/Tortas/tor_castano.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Torta de castaña</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>20 PP / $25.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <img src="../img/productos/Tortas/tor_kuchen_quesillo.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Kuchen de mermelada de frutilla</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>20 PP / $15.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <img src="../img/productos/Tortas/tor_mazapan_chocolate.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Torta de Chocolate</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>20 PP / $20.000</option>
                                                                <option>30 PP / $25.000</option>
                                                                <option>50 PP / $35.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <img src="../img/productos/Tortas/tor_mil_hojas.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Torta Mil Hoja</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>20 PP / $25.000</option>
                                                                <option>30 PP / $29.000</option>
                                                                <option>50 PP / $37.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <img src="../img/productos/Tortas/tor_panqueque.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Torta de panqueque Frambuesa</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>20 PP / $22.000</option>
                                                                <option>30 PP / $29.000</option>
                                                                <option>50 PP / $37.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <img src="../img/productos/Tortas/tor_tres_leches.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Torta tres leche</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>20 PP / $15.000</option>
                                                                <option>30 PP / $25.000</option>
                                                                <option>50 PP / $35.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Glosa</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-masas" role="tabpanel" aria-labelledby="nav-masas-tab">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Cantidad Personas / Precio $</th>
                                                    <th scope="col">Cantidad a llevar</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="../img/productos/Masas/chaparrita.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Chaparrita</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <img src="../img/productos/Masas/pascualina.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Pascualina</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <img src="../img/productos/Masas/hoja.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Empanada de mill hoja</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <img src="../img/productos/Masas/pollo_empanada.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Empanada de pollo</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <img src="../img/productos/Masas/pino.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Empanada de pino</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <img src="../img/productos/Masas/pizza.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Pizza</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-galletas" role="tabpanel" aria-labelledby="nav-galletas-tab">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Cantidad Personas / Precio $</th>
                                                    <th scope="col">Cantidad a llevar</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="../img/productos/Galletas/castano_250.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Galletas de castaño</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $500</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <img src="../img/productos/Galletas/cocadas.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Cocadas</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $300</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <img src="../img/productos/Galletas/danesa.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Galletas danesas</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $600</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <img src="../img/productos/Galletas/galletas_finas.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Lenguas Finas</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $140</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <img src="../img/productos/Galletas/mini_brownie.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Mini brownie</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <img src="../img/productos/Galletas/mini_muffin.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Mini Muffin</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $700</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-cocteleria" role="tabpanel" aria-labelledby="nav-cocteleria-tab">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Cantidad Personas / Precio $</th>
                                                    <th scope="col">Cantidad a llevar</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="../img/productos/Cocteleria/canape_especial_36_unidades.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Canape especial</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>26 unidades / $8.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <img src="../img/productos/Cocteleria/canape_fino_34_unidades.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Canape Fino</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>34 unidades / $10.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <img src="../img/productos/Cocteleria/empanaditas_12_unidades.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Empanaditas</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>12 unidades / $7.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <img src="../img/productos/Cocteleria/mini_miga_32_unidades.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Mini miga</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>32 unidades / $9.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <img src="../img/productos/Cocteleria/pizza_coctel_15_unidades.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Pizzas para coctel</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>15 unidades / $6.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <img src="../img/productos/Cocteleria/tapadito_copihue_16_unidades.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Tapaditos</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>16 unidades / $12.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-dulceria" role="tabpanel" aria-labelledby="nav-dulceria-tab">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Cantidad Personas / Precio $</th>
                                                    <th scope="col">Cantidad a llevar</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/aranda_.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Queque Marihuana</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/berlin.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Berlin</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/brownie.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Brownie</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/canela_rosquilla_caja_.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Rosquilla de Canela</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/canolo.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Cubierto de manjar</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/cocado.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Chilenito</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/delicia.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Delicias</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/donuts.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Donuts</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/media.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Media luna</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/mendocino.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Medocino</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">11</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/negrito.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Negrito</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">12</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/pan_de_miel.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Pan de Miel</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13</th>
                                                    <td>
                                                        <img src="../img/productos/Dulceria/rollo.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Dulce de rollo</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bebida" role="tabpanel" aria-labelledby="nav-bebida-tab">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Cantidad Personas / Precio $</th>
                                                    <th scope="col">Cantidad a llevar</th>
                                                    <th scope="col">Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/coca.png" alt="" height="70" />
                                                    </td>
                                                    <td>Coca-Cola lata</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.500</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/fanta.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Fanta lata</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/pepsi.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Pepsi lata</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/sprite.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Sprite</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $1.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/redbull.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>RedBull</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $2.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/m1.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Monster Blue</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $3.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/m2.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Monster White</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $3.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/m3.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Monster Green</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $3.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/m4.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Monster Red</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $3.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10</th>
                                                    <td>
                                                        <img src="../img/productos/Bebestibles/m5.jpg" alt="" height="70" />
                                                    </td>
                                                    <td>Monster Yellow</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="torta">
                                                                <option>1 unidad / $3.000</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" id="cantidad" maxlength="2" placeholder="Cantidad a llevar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group py-1">
                                                            <button type="submit" class="btn btn-info btn-fill pull-right btn-warning form-control">
                                                                <!--  <i class="fa fa-" aria-hidden="true"></i> -->
                                                                añadir
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!--BOLETAS -->
                    <div class="col-md-6">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                            </div>
                            <div class="card-body">
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
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">CANT.</th>
                                        <th scope="col">VALOR</th>
                                        <th scope="col">TOTAL</th>
                                        <th scope="col">ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Torta</td>
                                        <td>1</td>
                                        <td>$3000</td>
                                        <td>$3000</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Torta</td>
                                        <td>1</td>
                                        <td>$3000</td>
                                        <td>$3000</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Torta</td>
                                        <td>1</td>
                                        <td>$3000</td>
                                        <td>$3000</td>
                                        <td>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h5 class="text-center">Total:
                                <strong>$9.000.-</strong>
                            </h5>
                            <hr>
                            <div class="button-container mr-auto ml-auto">
                                <button type="submit" class="btn btn-info btn-fill pull-right btn-warning">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Imprimir Boleta
                                </button>
                            </div>
                        </div>
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

</html>