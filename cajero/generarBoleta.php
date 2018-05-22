<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar Boleta</title>
    <?php
        require_once('../DAO/BoletaDAO.php');
        require_once('../DAO/DetalleBoletaDAO.php');
        require_once('../DAO/ProductoPrecioDAO.php');
        require_once('../Entities/ProductoPrecio.php');
        require_once('../Entities/Boleta.php');
        require_once('../Entities/DetalleBoleta.php');

        $items = array();
        $total = 0;
        session_start();

        if(isset($_SESSION["items"])){
            $items = $_SESSION["items"];
        }

        if(isset($_POST["opcion"])){

            if($_POST["opcion"]=="Agregar"){
                $idproducto = $_POST["idproducto"];
                $cantidad = $_POST["cantidad"];                
                $prodConsulta = new ProductoPrecio($_POST["idproducto"]);
                ProductoPrecioDAO::sqlSelectOneProductoP($prodConsulta);
                $nombre = $prodConsulta->getDescripcion();
                $precio = $prodConsulta->getPrecio() * $_POST["cantidad"];
                $items[] = array("idprod" => $idproducto, "nombre"=>$nombre, "cant" => $cantidad, "precio" => $precio);
            }

            if($_POST["opcion"]=="Pagar"){
                $boleta = new Boleta(1,0,1,1,1,0);
                $nuevaBolID = BoletaDAO::sqlInsert($boleta);

                foreach ($items as $item) {
                    $nuevoProd = new ProductoPrecio($item['idprod']);
                    ProductoPrecioDAO::sqlSelectOneProductoP($nuevoProd);
                    $subtotal = $nuevoProd->getPrecio() * $item['cant'];
                    $nuevoDetalleBoleta = new DetalleBoleta(1,
                                                            $nuevoProd->getIdProductoP(),
                                                            $nuevaBolID,
                                                            $nuevoProd->getPrecio(),
                                                            $item['cant'],
                                                            $subtotal
                                                            );
                    DetalleBoletaDAO::sqlInsert($nuevoDetalleBoleta);  // NO ESTA INSERTANDO
                }
                // UPDATE BOLETA CON TOTAL CALCULADO
                session_destroy();
                header("location: index.php");
            }
        }
    ?>
</head>
<body>
    <h1>Nueva Boleta</h1>

    <form action="generarBoleta.php" method="POST">
        <h2>Ingresar Producto</h2>
        <table>
            <tr>
                <td>Id Producto</td>
                <td><input type="number" name="idproducto"></td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input type="number" name="cantidad"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="opcion" value="Agregar"></td>
            </tr>
        </table>

        <h2>Detalle Boleta</h2>
        <table>
            <tr>
                <th>Producto</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php
                foreach ($items as $item) {
                    echo "<tr>";
                    echo "<td>".$item["idprod"]."</td>";
                    echo "<td>".$item["nombre"]."</td>";
                    echo "<td>".$item["cant"]."</td>";
                    echo "<td>".$item["precio"]."</td>";
                    echo "</tr>";
                    $total += $item['precio'];
                }
            ?>
            <tr>
                <td>Total:</td>
                <td id="total"><?php echo $total ?></td>
            </tr>
        </table>
        <input type="submit" name="opcion" value="Pagar">
    </form>
    <?php $_SESSION['items']=$items; ?>
</body>
</html>