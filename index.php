<?php
require "db.incl.php";
require "router.php";
if (isset($content)) {
	//Don't do Anything
} else {
	$content="<h2>Nos no por hanja e pagina ku bo ta buskando, We are Sorry!!!</h2>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
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
	<?php echo $content ?>
	</div>
<div id="footer">Designed by (c) Jeancarl Medina for EASY COMPUTER</div>
</div>
</body>
</html>
