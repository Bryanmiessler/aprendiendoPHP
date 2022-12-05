<?php
session_start();

$_SESSION['user'] = "Bryan";
$_SESSION['status'] = "Available";

echo "Sesión Iniciada"."<br/>";

echo "Usuario: ".$_SESSION['user']." Estado: ".$_SESSION['status'];




?>