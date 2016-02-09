<!doctype html>
<html>
<?php
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
	$sql = "SELECT titel FROM activiteit WHERE id=".$_GET['act_id'];
	$result = mysqli_query($conn, $sql);
	$db_field = mysqli_fetch_assoc($result);
	?>
<head>
<link href="style.css" type="text/CSS" rel="stylesheet">
</head>

<body>

<h1>Inschrijven voor: <?php echo $db_field['titel']; ?></h1>


<form action="" method="post">
	<!-- hidden item -->
	<input type='hidden' name='act_id' value="<?php echo $_GET['act_id']; ?>">

	<label>Voornaam:</label>
	<input type="text" name="voornaam" required="required" placeholder="Vul in je voornaam"/><br/><br />
	
	<label>Achternaam:</label>
	<input type="text" name="achternaam" required="required" placeholder="Vul in je achternaam"/><br/><br />
	
	<label>Omschrijving:</label>
	<input type="text" name="omschrijving" required="required" placeholder="Vul in je omschrijving"/><br/><br />

	<input type="submit" value=" Submit " name="submit"/><br />
</form>
<br></br>
<p> <a href="index.php"> Terug </p> </a>
<?php
// if the user entered the form and pushed the submit button, then save everything to the database
if(isset($_POST["submit"])){


	$sql = "INSERT INTO inschrijf (voornaam, achternaam, omschrijving)
	VALUES ('".$_POST["voornaam"]."','".$_POST["achternaam"]."','".$_POST["omschrijving"]."')"; 

	if ($conn->query($sql) === TRUE) {
		echo "<script type= 'text/javascript'>alert('Succes!');</script>";
	} else {
		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
	}

	$conn->close();
}
?>




<?php
if ( isset($_POST['submit']))
{
	print_r($_POST);
}
?>
</body>
</html>