<?php
    require_once("/NEG/ComunaNEG.php");
    


    foreach(ComunaNEG::listarComuna() as $sqlS){
       echo "<p>{$sqlS->getNombreComuna()}</p>";
    }
  
?>