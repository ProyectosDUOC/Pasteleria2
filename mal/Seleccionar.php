<?php
function seleccionar()
{
    if(isset($_GET['id_producto']))
    $consultas = new ConsultasC();
    $id_producto = $_GET['id_producto'];
    $filas = $consultas->cargarProducto($id_producto);

    foreach($filas as $fila){
        echo '
        <form method="POST" action="AgregarProducto.php"> 
    <table>
      <tr>
        <td>ID Producto: </td>
        <td><input type="text" name="idProducto" id="idProducto" value="'.$fila['id_producto'].'"></td>
      </tr>
      <tr>
        <td>Nombre: </td>
<td> <input type="text" name="nombreProducto" id="nombreProducto"  value="'.$fila['nombre_producto'].'"></td>
</tr>
<tr>
        <td>Nombre de imagen: </td>
<td> <input type="text" name="imagen" id="imagen"  value="'.$fila['imagen'].'"></td>
</tr>
<tr>
<td>Cantidad:</td>
<td> 
<select name="tamaño" id="tamaño"  value="'.$fila['tamano'].'">
  <option value="1">Individual</option>
  <option value="20">20 Personas</option>
  <option value="40">40 Personas</option>
  <option value="80">80 Personas</option>
</select>
</td>
</tr>

<tr>	
  <td>
    <input type="submit" name="cargar" value="Cargar imagen"  style="background-color:#FFFFD3;">
  </td>
  <td>
    <input type="file"  style="background-color:#FFFFD3;">
  </td>
 </tr>
<tr>
<td>Categoria:</td>
<td> 
<select name="categoria" id="categoria"  value="'.$fila['id_categoria'].'">
  <option value="Tortas">Tortas</option>
  <option value="Kuchen">Kuchen</option>
  <option value="Pastel">Pastel</option>
  <option value="Bebesitble">Bebestible</option>
</select>
</td>
</tr>
<tr>
  
	<td>Precio: </td>
	<td> <input type="text" name="Precio" id="Precio"  value="'.$fila['id_precio'].'"></td>
</tr>

<tr>
		<td> Descripcion </td>
		<td><textarea rows="4" cols="50"  style="background-color:#FFFFD3;">
Torta de chocolate con frutillas traidas de Australia y lavadas en corea del norte. 
</textarea></td>
</tr>

<tr>

</table>
<td><input type="submit" value="Agregar" name="btn"></td>
<td><input type="submit" value="Quitar" name="btn"></td>
  <div>
      <br>
        <a href="VerProducto.php">Ver listado de Productos</a>
    </div>
    </form>
</body> ';
    }
    

}

?>