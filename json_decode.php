<?php 

$jsonContenido = '[
  {"nombre":"julian", "apellido":"velez"},
  {"nombre":"oscar", "apellido":"cuero"}
  ]';

  $resultado = json_decode($jsonContenido);

  // print_r($resultado);

  foreach($resultado as $persona){
    print_r($persona->nombre." ".$persona->apellido."<br>");

  };


?>