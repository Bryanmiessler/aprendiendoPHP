<?php 
$server = 'localhost';
$user = 'root';
$password = '';

try {
  $conection = new PDO("mysql:host=$server;dbname=album",$user, $password);
  $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  // echo "conexion establecida";

  $sql = "SELECT * FROM `fotos`";

  $sentencia = $conection->prepare($sql);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  // print_r($resultado);

  foreach($resultado as $foto){
    echo$foto['id'].' - ';
    echo$foto['nombre'].'</br>';
    echo$foto['rutaArchivo'].'</br>';
  }


} catch (PDOException $error) {
  echo"conexion rechazada".$error;
}

?>