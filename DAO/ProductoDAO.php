<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
//Agregamos desde BD.PHPy la Entitie Boleta
// desde el Path raiz ==> $rootDir

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/BD/BD.php");

require_once("../Entities/Producto.php");

require_once("../bd/conexion.php");

class ProductoDAO {

    public static function sqlInsert($idProducto,$codProducto,$nombre,$imagen,$tamano,$activo,$categoria) {
        $modelo = new ConexionC();
        $conexion = $modelo->conexionbd();
        $stSql = "insert into producto (id_producto,cod_producto,nombre_producto,imagen,tamano,activo,id_cate)
         values (:idProducto,:codProducto,:nombreProducto,:imagen,:tamano,:activo,:categoria)";
         $statement = $conexion->prepare($stSql);
        $statement->bindParam(':idProducto', $idProducto);
        $statement->bindParam(':codProducto', $codProducto);
        $statement->bindParam(':nombreProducto', $nombre);
        $statement->bindParam(':imagen', $imagen);
        $statement->bindParam(':tamano', $tamano);
        $statement->bindParam(':activo', $activo);
        $statement->bindParam(':categoria', $categoria);

        if(!$statement){
            return "Error";
        }else {
            $statement->execute();
            return "Agregado correctamente";
        }
    }
       
    public function listarProductos(){
        $row = null;
        $modelo = new ConexionC();
        $conexion = $modelo->conexionbd();
        $sql = "select * from producto";
        $statement = $conexion->prepare($sql);
        $statement->execute();

        while($resultado=$statement->fetch()){
            $row[] = $resultado;
        }
        return $row;
    }
    public static function sqlUpdate($detalleBoleta) {
        $stSql = "update detalle_boleta SET ";
        $stSql .= " id_detalle={$detalleBoleta->getTotal()}"
                . ",id_producto_p={$detalleBoleta->getIdEmpleado()}"
                . ",id_boleta={$detalleBoleta->getIdFormaPago()}"
                . ",precio={$detalleBoleta->getIdSucursal()}"
                . ",cant={$detalleBoleta->getIdPedidoLocal()}"
                . ",total={$detalleBoleta->getTotal()}";
        $stSql .= " Where  id_boleta={$detalleBoleta->getIdBoleta()}";
        return BD::getInstance()->sqlEjecutar($stSql);
    }

    public function eliminarProducto($idProducto){
        $modelo = new ConexionC();
        $conexion = $modelo->conexionbd();
        $sql = "delete from Producto where id_producto = :idProducto";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idProducto', $idProducto);
        if(!$statement){
            return "Error al eliminar";
        }else {
            $statement->execute();
            return "Eliminado correctamente";
        }
    }


    /* METODO BUSCAR */

    // Método que ejecuta una sentencia,
    // Sin embargo no retorna ningún registro
    public function buscarProducto($idProducto){
        $row = null;
        $modelo = new ConexionC();
        $conexion = $modelo->conexionbd();
        $r = "%".$idProducto."%";
        $sql = "select * from producto where id_producto like :idProducto";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idProducto', $r);
        $statement->execute();
        while($resultado=$statement->fetch()){
            $row[] = $resultado;
        }
        return $row;
    }

    // Método que busca el siguiente registro disponible
    // De acuerdo a la sentencia sql ejecutada por sqlSelect
    // crea una instancia de boletay la devuelve
    // Observe que no recibe parámetro, ya que retorna un boleta
    /*public static function sqlFetch() {
        // Retorna un registro
        $fila = BD::getInstance()->sqlFetch();
        // Si fila esta vacia,no hay registro devuelve null
        if (!$fila)
            return null;
        // Llena los valores que faltan a la instancia
        // entregada por parámetro $detalleBoleta
        $detalleBoletaAux = new Boleta($fila["id_boleta"]
                , $fila["total"]
                , $fila["id_empleado"]
                , $fila["id_forma_pago"]
                , $fila["id_sucursal"]
                , $fila["id_pedido_local"]);
        return $detalleBoletaAux;
    }

    // Método que busca el siguiente registro disponible
    // De acuerdo a la sentencia sql ejecutada por sqlSelect
    // y llena la instancia pasada por parámetro
    public static function sqlFetchBoleta($detalleBoleta) {
        // Retorna un registro
        $fila = BD::getInstance()->sqlFetch();
        // Si fila esta vacia,no hay registro devuelve false
        if (!$fila)
            return false;
        // Llena los valores que faltan a la instancia
        // entregada por parámetro $detalleBoleta
        $detalleBoleta->setIdBoleta($fila["id_boleta"]);
        $detalleBoleta->setTotal($fila["total"]);
        $detalleBoleta->setIdEmpleado($fila["id_empleado"]);
        $detalleBoleta->setIdFormaPago($fila["id_forma_pago"]);
        $detalleBoleta->setIdSucursal($fila["id_sucursal"]);
        $detalleBoleta->setIdPedidoLocal($fila["id_pedido_local"]);
        return true;
    }

    // Recibe como parámetro un id,no una clase
    // retornará un objeto deltipo boleta
    public static function sqlSelectOne($detalleBoletaId) {
        // creaa la sentencia sql para el select
        $stSql = "select *  from boleta ";
        $stSql .= " Where  id_boleta=$detalleBoletaId"
        ;
        // Ejecuta el Select
        $resultado = BD::getInstance()->sqlSelect($stSql);
        // si no existe registro retorna  null
        if (!$resultado)
            return null;
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;

        // crea una instancia de boleta
        // con los valores retornados de la BD
        $detalleBoletaAux = new Boleta($fila["id_boleta"]
                , $fila["total"]
                , $fila["id_empleado"]
                , $fila["id_forma_pago"]
                , $fila["id_sucursal"]
                , $fila["id_pedido_local"]);
        // Retorna el Objeto creado boletaAux
        return $detalleBoletaAux;
    }

    // Recibe como parámetro una instancia, solocon los valores
    // de la PK, en este caso boleta_id
    // retornará un true o false, dependiendo si existe registro
    public static function sqlSelectOneBoleta($detalleBoleta) {
        // Crea el Sql utilizando el boletaId de la clase
        $stSql = "select *  from  boleta ";
        $stSql .= " Where  id_boleta={$detalleBoleta->getBoletaId()}";

        // Lee el registro
        $resultado = BD::getInstance()->sqlSelect($stSql);
        // si no existe devuelve false
        if (!$resultado)
            return false;
        // retorna el registro y lo deja en fila
        $fila = BD::getInstance()->sqlFetch();
        if (!$fila)
            return null;
        // llena los campos que faltan de la instancia        
        $detalleBoleta->setIdBoleta($fila["id_boleta"]);
        $detalleBoleta->setTotal($fila["total"]);
        $detalleBoleta->setIdEmpleado($fila["id_empleado"]);
        $detalleBoleta->setIdFormaPago($fila["id_forma_pago"]);
        $detalleBoleta->setIdSucursal($fila["id_sucursal"]);
        $detalleBoleta->setIdPedidoLocal($fila["id_pedido_local"]);
        // retorna true, ya que resulto la operación
        return true;
    }

    public static function sqlSelectTodo() {
        $stSql = "select *  from  boleta ";
        // Ejecutamos sqlSelectTodo, el cual nos devuleve un arreglo
        $miArreglo = BD::getInstance()->sqlSelectTodo($stSql);
        // Iniciamos el arreglo $pila como array()
        $pila = array();
        // Recorremos el Arreglo $miArreglo
        foreach ($miArreglo as $fila) {
            // Por cada registro $fila creamos un Boleta
            $actorAux = new Boleta($fila["id_boleta"]
                , $fila["total"]
                , $fila["id_empleado"]
                , $fila["id_forma_pago"]
                , $fila["id_sucursal"]
                , $fila["id_pedido_local"]);
            // Agregamos el Boleta a la $pila			
            array_push($pila, $actorAux);
        }
        // Retornamos el Arreglo $pila Lleno
        return $pila;
    }*/
}
?>