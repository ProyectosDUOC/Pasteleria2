<?php

if (!isset($rootDir))
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
require_once($rootDir . "/DAO/BoletaDAO.php");

class BoletaNEG {

    public static function crearBoleta($boleta) {
        // Verificamos si existe el registro en la BD
        // Creamos una Copia de la clase boleta
        // Con el objetivo de no perder los datos, si resulta el select 
        $boletaAux = $boleta;
        // Si utilizamos la clase $boleta y Resulta el select 
        // Perderemos los datos que vienen en $boleta
        // Por este motivo creamos $boletaAux
        // entonces
        //        $boletaAux Contendrá los datos de la BD
        //        $boleta    Contiene los datos del Formulario			
        if (BoletaDAO::sqlSelectOneBoleta($boletaAux)) {
            // Si No existe lo Actualizamos
            if (BoletaDAO::sqlUpdate($boleta))
                return false;
        }
        else {
            // Si No existe lo Creamos
            if (BoletaDAO::sqlInsert($boleta))
                return false;
        }
        // Si Llego hasta acá, resulto el insert o update
        return true;
    }

    public static function eliminarBoleta($boleta) {
        // Consultamos si Existe el Registro
        // Algún otro cliente pudo haberlo eliminado
        if (!BoletaDAO::sqlSelectOneBoleta($boleta)) {
            // Si No existe informamos que no existe
            return false;
        }
        // En este punto significa que existe el Registro
        // Por lo cual eliminamos el registro
        if (!BoletaDAO::sqlDelete($boleta))
            return false;
        return true;
    }

    public static function buscarBoleta($boleta) {
        // Busca un boleta en la BD
        if (!BoletaDAO::sqlSelectOneBoleta($boleta)) {
            // Si no existe retorna false
            return false;
        }
        // Si existe retorna True
        // recordar que los datos viajan en la clase $boleta
        return true;
    }

    public static function listarBoleta() {
        // Retorna un Arreglo de Boleta
        return BoletaDAO::sqlSelectTodo();
    }

}

?>
