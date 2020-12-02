<?php
#Page 2
?>

<html>
<head><title>Weight</title></head>
<body>

<?php
	
include('groupdb.php');
	
try {
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
  echo"<header>";
  echo"<h1>Enter a weight</h1>";
  echo"</header>";

  echo"<form action='http://students.cs.niu.edu/~z1745377/page2.php' method='POST'>";

  //Holds the Weight
  echo"Weight:<input type='number' name='Weight'/><br>";
  //Holds the Date
  echo"Date:<input type='date' name='Date'/><br>";

  //Creates a button to submit
  echo"<input type='submit' name='submit'/>\n";
  echo"</form>";

  if(isset($_POST['submit'])){

  $Wrs=$pdo->prepare("INSERT INTO Weight (Date_,Weight) VALUES(:Date_,:Weight);");

  $Wrs->bindParam(':Date_',$_POST['Date']);

  $Wrs->bindParam(':Weight',$_POST['Weight']);

  $Wrs->execute();

  if(!$Wrs){echo"Error updating Weight";die();}

  echo"<br>Weight Updated!<br>";

  }

catch(PDOexception $e)
{
	echo "Connection to database failed" . $e->getMessage();
}
?>
</body>
</html>
