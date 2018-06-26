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
            
            <div class="content">
                <div class="container-fluid">
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
                                            <form class="">
                                                <h4>Información de Usuario</h4>
                                                <div class="">
                                                    <label class="control-label" for="inputFname1">Usuario
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="inputFname1" placeholder="Usuario">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="" for="inputFname1">Contraseña
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="password" id="inputFname1" placeholder="Contraseña">
                                                    </div>
                                                </div>
                                                <h4>Tu Información Personal</h4>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputLnam">Nombres
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="inputLnam" placeholder="Nombres">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputLnam">Apellidos
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="inputLnam" placeholder="Apellidos">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Fecha de cumpleaños
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <select class="span1" name="days">
                                                            <option value="">Dia</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                        <select class="span1" name="days">
                                                            <option value="">Mes</option>
                                                            <option value="1">Enero</option>
                                                            <option value="2">Febrero</option>
                                                            <option value="3">Marzo</option>
                                                            <option value="4">Abril</option>
                                                            <option value="5">Mayo</option>
                                                            <option value="6">Junio</option>
                                                            <option value="7">Julio</option>
                                                            <option value="8">Agosto</option>
                                                            <option value="9">Septiembre </option>
                                                            <option value="10">Octubre</option>
                                                            <option value="11">Noviembre</option>
                                                            <option value="12">Diciembre </option>
                                                        </select>
                                                        <select class="span1" name="days">
                                                            <option value="">Año</option>
                                                            <option value="1">2000</option>
                                                            <option value="2">1999</option>
                                                            <option value="3">1998</option>
                                                            <option value="4">1997</option>
                                                            <option value="5">1996</option>
                                                            <option value="6">1995</option>
                                                            <option value="7">1994</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="input_email">Email
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="input_email" placeholder="Email">
                                                    </div>
                                                </div>

                                                <h4>Tu dirección</h4>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputFname">Nombres
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="inputFname" placeholder="Nombres">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputLname">Apellidos
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="inputLname" placeholder="Apellidos" />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="direccion">Dirección
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="direccion" placeholder="Dirección" />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="ciudad">Ciudad
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="city" placeholder="ciudad" />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="postal">Zip / Codigo postal
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="postal" placeholder="Zip / Codigo postal" />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="pais">Pais
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" id="postal" placeholder="Pais" value="Chile" />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="aditionalInfo">Información Adicional</label>
                                                    <div class="controls">
                                                        <textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3">Información Adicional</textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="phone">Telefono
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="controls">
                                                        <input type="text" name="phone" id="phone" placeholder="Telefono" />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="mobile">Celular</label>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" id="mobile" placeholder="Celular" />
                                                    </div>
                                                </div>
                                                <p>
                                                    <sup>*</sup> Requerido</p>
                                            </form>
                                            <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName">First name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                                <div class="invalid-feedback">
                                                Valid first name is required.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName">Last name</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                                <div class="invalid-feedback">
                                                Valid last name is required.
                                                </div>
                                            </div>
                                            </div>
                                                                <div class="mb-3">
                                            <label for="username">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="username" placeholder="Username" required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                Your username is required.
                                                </div>
                                            </div>
                                            </div>
                                </div>
                             

                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button type="submit" class="btn btn-info btn-fill pull-right btn-danger">
                                        Registrar
                                    </button>
                                </div>
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
        <div class="row py-4">
            <div class="col-md-3 py-4" >
                <div style="position:fixed;left:90%;" class="py-4"> 
                
                <a  href="#producto" class="btn btn-fill btn-secondary"><i class="nc-icon nc-stre-up icon-bold"></i> Productos</a> 
                <br><br>
                <a  href="#boleta" class="btn btn-fill btn-success"> <i class="nc-icon nc-cart-simple"></i> Carrito</a> 
                                           
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