<?php
//inicio de sesion de los distindos usuarios
 $alert ='';
 session_start();

if (!empty($_POST)) {
	if (!empty($_POST['usuario']) || !empty($_POST['contraseña'])) { // si las variables POST no estan vacias
		require_once "conexionPDO.php";   // llamando el archivo de la conexion
		$usuario = $_POST['usuario'];     
		$contraseña = $_POST['contraseña'];

		$query = mysqli_query($conn,"SELECT * FROM tbl_usuario WHERE Nom_Usuario = '$usuario' 
			                  AND Contraseña = '$contraseña'"); //consulta y comprobacion a la base de datos
		$result = mysqli_num_rows($query);

		if ($result > 0) {
			
			$data = mysqli_fetch_array($query); // recorrer el arreglo
			//guardar los datos necesarios en variables SESSION
			$_SESSION['active'] = true;
			$_SESSION['ID_Usuario'] = $data['ID_Usuario'];
			$_SESSION['Nom_Usuario'] = $data['Nom_Usuario'];
			$_SESSION['ID_Rol'] = $data['ID_Rol'];
          

			$rol = $_SESSION['ID_Rol'];  
			switch ($rol) {
				case 1:
				     $usuario = $_SESSION['Nom_Usuario'];
					header("location: ../Index.php");
					break;
				case 2:
					header("location: ../Consulta.php");
					break;

				case 3:
						header("location: ../Facturacion.php");
					
					break;	

					case 4:
						header("location: ../Preclinica.php");
					
					break;	
					
				default:
					break;
			}

		}else{
		  echo "<script> alert('Usuario o Contraseña incorrecta');window.history.go(-1);
		    </script>";
			session_destroy();

				
		}
	}else{

	}
  }

?>