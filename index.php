<?php
// deklara
define("akseso", 1);
// si e variabel $content no tin nada den dje pone un teksto

if(isset($content)) {

} else {
	$content = "No tin nada hinka porfabor wak si bo a pone e variabel bon";
}
// E Database connection
require "db.incl.php";

// e router ku ta disidi kua pagina un hende mester wak
require "router.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/custom.css">
	<title>Easy Petshop</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<img src="img/logo.png">
			<ul id="navigation">
				<li><a href="?p=home" title="Home">Home</a></li>
				<li><a href="?p=pets" title="Pets">Pets</a></li>
				<li><a href="?p=contact" title="Contact">Contact us</a></li>
			</ul>
		</div>
		<div id="main">
			<? echo $content ?>
		</div>
	</div>
</body>
</html>