<?php

// aki ta bin e logika pa hinka e informashon den e database.
$nomber = $_POST['nomber'];
$mensahe = $_POST['mensahe'];

// wak si e datos ta bon hinka aden
if(empty($nomber) || empty($mensahe)) {
	// dune advertensia bise lu e informashon no ta bon hinka aden
	$content = '<h2 class="error">Jena e formulario kompleto! Nomber i mensahe mester ta jena !!!</h2>';
} else {
	// laga nos hinka e informashon den database
	$sql = "INSERT INTO contact(nomber, mensahe) VALUES('$nomber', '$mensahe')";
	$content .= $sql;
	mysqli_query($dbConnection, $sql);

	// jama e bishitante danki pa jena e informashon
	$content = "Danki $nomber, <br> nos lo tuma kontakto ku bo. <br> gerente";
}

