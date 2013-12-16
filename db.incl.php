<?php
//Akinan nos ta bai konekta ku e Database easypetshop
$user="root";
$password="";
$host="localhost";
$db="easypetshop";

//Create connection
$dbConnection =mysqli_connect($host, $user, $password, $db);

//Check connection
if(mysqli_connect_errno()) {
	die("error riba nos pagina ". mysqli_connect_error());
}
?>