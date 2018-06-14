<?php

// Declaramos una variable $rootDir si es que no existe
// isset==> si existe o no una variable
if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
//Agregamos desde BD.PHPy la Entitie Boleta
// desde el Path raiz ==> $rootDir
require_once($rootDir . "/BD/bd.php");
require_once($rootDir . "/Entities/Boleta.php");

class DetalleBoletaDAO {

    //insert
    public static function sqlInsert($detalleBoleta) {
        $stSql = "insert into detalle_boleta VALUES";
        $stSql .= " (:id_detalle,:id_producto_p,:id_boleta,:precio,:cant,:total)";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($cliente);
        return $rs->execute($params);
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

    public static function sqlDelete($detalleBoleta) {
        $stSql = "delete from  detalle_boleta ";
        $stSql .= " Where  id_detalle_boleta={$detalleBoleta->getIdBoleta()}";
        return BD::getInstance()->sqlEjecutar($stSql);
    }

    /* METODO BUSCAR */

    // Método que ejecuta una sentencia,
    // Sin embargo no retorna ningún registro
    public static function sqlSelect($detalleBoleta) {
        $stSql = "select *  from  detalle_boleta ";
        $stSql .= " Where  id_detalle_boleta={$detalleBoleta->geIdBoleta()}"
        ;
        $resultado = BD::getInstance()->sqlSelect($stSql);
        if (!$resultado)
            return false;
        return true;
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