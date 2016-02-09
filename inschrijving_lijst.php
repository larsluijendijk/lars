<!doctype html>
<html>

<head>
<link href="style.css" type="text/CSS" rel="stylesheet">
</head>

<body>
<h1>Inschrijflijst</h1>
<p> <a href="index.php"> Terug </p> </a>
<div class="container">
<?php 

$user_name = "root";
$password = "";
$database = "php1";
$server = "127.0.0.1";

$db_handle = mysqli_connect($server, $user_name, $password);
$db_found = mysqli_select_db( $db_handle, $database);

if ($db_found) {
		
	$SQL = 'SELECT * FROM inschrijf';
	$result = mysqli_query($db_handle, $SQL);
	echo '<table>
			<tr>
				<th>voornaam</th>
				<th>achternaam</th>
				<th>omschrijving</th>
			</tr>';
	while ( $db_field = mysqli_fetch_assoc($result) ) {
		echo '
		<tr>
			<td>' . $db_field['voornaam'] . '</td>
			<td>' . $db_field['achternaam'] . '</td>
			<td>' . $db_field['omschrijving'] . '</td>
		</tr>';
	}
}

?>

</div>

</body>

</html>
