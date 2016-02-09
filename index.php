<!doctype html>
<html>

<head>
<link href="style.css" type="text/CSS" rel="stylesheet">
</head>

<body>
<h1>Activiteiten</h1>

<a href="activiteit_toevoegen.php"><p>Klik hier om een nieuwe activiteit toe te voegen</p></a>
<p><a href="inschrijving_lijst.php">Inschrijflijst</a></p>
<div class="container">
<?php 

$user_name = "root";
$password = "";
$database = "php1";
$server = "127.0.0.1";

$db_handle = mysqli_connect($server, $user_name, $password);
$db_found = mysqli_select_db( $db_handle, $database);

if ($db_found) {
		
	$SQL = 'SELECT * FROM activiteit';
	$result = mysqli_query($db_handle, $SQL);
	echo '<table>
			<tr>
				<th>titel</th>
				<th>omschrijving</th>
				<th>datum</th>
				<th>prijs</th>
				<th>categorie</th>
				<th>inschrijven</th>
			</tr>';
	while ( $db_field = mysqli_fetch_assoc($result) ) {
		echo '
		<tr>
			<td>' . $db_field['titel'] . '</td>
			<td>' . $db_field['omschrijving'] . '</td>
			<td>' . $db_field['datum'] . '</td>
			<td>' . $db_field['prijs'] . '</td>
			<td>' . $db_field['categorie'] . '</td>
			<td><a href=inschrijving_toevoegen.php?act_id=' . $db_field['id'] . '>inschrijven</a></td>
		</tr>';
	}
}

?>


</div>

</body>

</html>