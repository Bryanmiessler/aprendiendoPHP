<?php 
$server = 'localhost';
$user = 'root';
$password = '';

try {
  $conection = new PDO("mysql:host=$server;dbname=album",$user, $password);
  $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "conexion establecida";

  $sql = "INSERT INTO `fotos` (`id`, `nombre`, `rutaArchivo`) VALUES (NULL, 'jugando con mi perro', 'perrito.jpg');";
  $conection->exec($sql);


} catch (PDOException $error) {
  echo"conexion rechazada".$error;
}

?>