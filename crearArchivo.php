<?php

$nuevoArchivo = 'archivo.txt';
$contenido = 'Soy el archivo creado, buenas';

$archivoAcrear = fopen($nuevoArchivo,"w");
fwrite($archivoAcrear, $contenido);
fclose($archivoAcrear);
?>