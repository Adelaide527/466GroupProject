<?php
#Page 2
?>

<html>

<h3>Update your weight</h3>

<body>

<?php
	
include('groupdb.php');
	
try {
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOexception $e)
{
	echo "Connection to database failed" . $e->getMessage();
}
?>

<form method="POST" >
	<label for="weight">Enter your new weight: </label>
	<input type="number" id="weight" name="weight">lbs</input>
	<input type="submit" value="Update">
</form>

</body>
</html>
