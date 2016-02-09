<!doctype html>
<html>

<head>
<link href="style.css" type="text/CSS" rel="stylesheet">
</head>

<body>

<h1>Activiteit toevoegen</h1>

<form action="" method="post">
	<label>Titel:</label>
	<input type="text" name="titel" required="required" placeholder="Vul in de titel"/><br/><br />
	<label>Omschrijving:</label>
	<input type="text" name="omschrijving" required="required" placeholder="Vul in de omschrijving"/><br/><br />
	<label>Datum:</label>
	<input type="date" name="datum" required="required" placeholder="Vul in de datum"/><br/><br />
	<label>Prijs:</label>
	<input type="text" name="prijs" required="required" placeholder="Vul in de prijs"/><br/><br />
	<label>Categorie:</label>
	<select name="categorie">
	<option value="sport">Sport</option>
	<option value="politiek">Politiek</option>
	<option value="cultuur">Cultuur</option>
	<option value="vrijwilligerswerk">Vrijwilligerswerk</option>
	</select>
	<br/><br />
	<br/><br />
	<label></label>
	<input type="submit" value=" Submit " name="submit"/><br />
	</form>
<?php
// if the user entered the form and pushed the submit button, then save everything to the database
if(isset($_POST["submit"])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO activiteit (titel, omschrijving, datum, prijs, categorie)
	VALUES ('".$_POST["titel"]."','".$_POST["omschrijving"]."','".$_POST["datum"]."','".$_POST["prijs"]."','".$_POST["categorie"]."')"; 

	if ($conn->query($sql) === TRUE) {
		echo "<script type= 'text/javascript'>alert('Succesvol ingeschreven');</script>";
	} else {
		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
	}

	$conn->close();
}
?>
<br></br>
<p> <a href="index.php"> Terug </p> </a>
</body>


</html>