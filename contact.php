<?php
// nos ta wak si nos variabel sekreto ta deklara
if(defined("akseso")) {

} else {
	die("Bo ta renstrihe pa wak e pagina aki ... Baiii.. !!");
}

$content = '<form action="?p=contact_handler" method="post">
	<table>
		<tbody>
			<tr>
				<td>Nomber</td>
				<td><input type="text" name="nomber" value="" placeholder="Hinka bo nomber"></td>
			</tr>
			<tr>
				<td>mensage</td>
				<td> <textarea name="mensahe"></textarea></td>
			</tr>
		</tbody>
	</table>
	<input type="submit" name="" value="Manda e mensage">
</form>';