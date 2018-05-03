
<?php session_start();

if(isset($_SESSION['usuario'])){
	header('Location : contenido.php');
}else {
	require 'registrate.php'; 
}



 ?>