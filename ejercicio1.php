<?php

//ARCHIVO ORIGINAL PARA MODIFICAR.
$lines = file('TXT/file_original.txt');

//GENERAMOS ARCHIVO DE TEXTO NUEVO PARA GUARDAR CON LA INFORMACION MODIFICADA
$file_name = "TXT/" .date("YmdHis") .".txt";
file_exists($file_name);
$file_name = fopen($file_name, "a");
/*******************************************************************************/


// RECORREMOS EL ARCHIVO Y LE HACEMOS LAS MODIFICACIONES PARA GUARDARLO EN EL ARCHIVO NUEVO
foreach ($lines as $line_num => $line) {
    $line = substr($line, 0, strpos($line, "Borrar"));
    fwrite($file_name, htmlspecialchars(str_replace(" ","",$line)) ."\n");
    }
    fclose($file_name);
/**********************************************************************************/
?>

