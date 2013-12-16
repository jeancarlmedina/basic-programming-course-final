<?php
$content = "";

// Query e database pa buska tur e pets nan ku nos tin.
$sql = "SELECT *FROM pet";
$res = mysqli_query($dbConnection, $sql);
$content .= '<table id="table">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Type</th>
<th>Price</th>
</tr>
</thead>
<tbody>';

while($inf = mysqli_fetch_array($res))
{

$content .= "<tr>
<td>" . $inf['pet_name'] ."</td>
<td>" . $inf['pet_age'] ."</td>
<td>" . $inf['pet_price'] ."</td>
<td>" . $inf['pet_type'] ."</td>
</tr>";

}

$content .= "</tbody></table><br>";
?>