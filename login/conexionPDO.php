<?php 
$server = "localhost";
$user = "root";
$password = "latigra24";
$database = "franclar"; 

$conn = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>