<?php 

function conectar(){
	$Servidor = "localhost";
	$Usuario="root";
	$password="";
	$bd="proyecto";

	$conexion=mysqli_connect($Servidor,$Usuario,$password,$bd);

	return $conexion;

}

?>