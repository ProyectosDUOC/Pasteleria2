<?php
    require_once('consultas.php');
    require_once('conexion.php');
    require_once('ListarProducto.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>Listado de Producto</h3>
    <div>
        <form method="get">
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
        </form>    
    </div>
    
    <?php 
    if(isset($_GET['buscar']))
    {
    buscar($_GET['buscar']);
    }
    else
    {
    listar(); 
    }
    ?>
    <br>
    <a href="Producto.html">Agregar Producto</a>
</body>
</html>