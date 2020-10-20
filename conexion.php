<?php 
$server = "localhost";
$user = "root";
$password = "latigra24";
$database = "franclar"; 

$con = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$con) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>