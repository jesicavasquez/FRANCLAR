<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "sistema_franclar"; 

$conn = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>