
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'appchat2';

try {
  $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

function formatearFecha($fecha){
 return date('g: i a', strtotime($fecha));

}

?>