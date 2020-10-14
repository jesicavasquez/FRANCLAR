<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "sistema_franclar"; 

$con = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$con) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>