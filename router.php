<?php
//Demostrashon di input
//$nomber = $_GET["nomber"];
//$content ="Konta $nomber";

if(isset($_GET['p'])) {
$page = $_GET['p'];
switch ($page) {
case 'home':
require "home.php";
break;

case 'pets':
require "pets.php";
break;

case 'contact':
require "contact.php";
break;

case 'contact_handler':
require "contact_handler.php";
break;

default:
require "home.php";
break;
}

} else {
require "home.php";
}
?>