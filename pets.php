<?php
// nos ta wak si nos variabel sekreto ta deklara
if(defined("akseso")) {

} else {
	die("Bo ta renstrihe pa wak e pagina aki ... Baiii.. !!");
}
$content = "";
// Query e database pa buska tur e pets nan ku nos tin.
$sql = "SELECT * FROM pet";
$res = mysqli_query($dbConnection, $sql);
$content .= '<table id="table">
	<thead>
		<tr>
			<th>name</th>
			<th>Age</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>';
while($inf = mysqli_fetch_array($res)){
	$content .= "<tr>
	<td>" . $inf['name'] ."</td>
	<td>" . $inf['age'] ."</td>
	<td>" . $inf['price'] ."</td>
	</tr>";
	
}
	$content .= "</tbody></table>";


?>
		