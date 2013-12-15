<?php
// nos ta wak si nos variabel sekreto ta deklara
if(defined("akseso")) {

} else {
	die("Bo ta renstrihe pa wak e pagina aki ... Baiii.. !!");
}

// nos ta bai wak si e variable "p" ta deklara

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