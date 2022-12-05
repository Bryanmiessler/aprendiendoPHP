<?php

$archivo = 'texto.txt';

$archivoAbierto = fopen($archivo, "r");

$contenido = fread($archivoAbierto, filesize($archivo));

echo $contenido;

?>