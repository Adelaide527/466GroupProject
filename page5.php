<html><head><title>Add Workouts</title></head><body>
<?php

include('groupdb.php');


try{

  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  echo"<header>";
  echo"<h1>Enter Your Workout</h1>";
  echo"</header>";

  echo"<form action='http://students.cs.niu.edu/~z1871561/page5.php' method='POST'>";

  //Holds the ID
  echo"Enter your ID:<input type='text' name='ID'/><br>";
  //Holds Workout
  echo"Workout Type:<input type='text' name='Type'/><br>";
  //Holds Intensity
  echo"Intensity:<select name='Intensity'>";
  echo"<option value='Low'>Low</option>";
  echo"<option value='Medium'>Medium</option>";
  echo"<option value='High'>High</option>";
  echo"</select><br>";
  //Holds Duration
  echo"Duration(min):<input type='text' name='Duration'/><br>";
  //Holds the Calories Burnt
  echo"Calories Burned:<input type='text' name='Calories'/><br>";
  //Holds the Date
  echo"Date:<input type='date' name='Date'/><br>";

  //Creates a button to submit
  echo"<input type='submit' name='submit'/>\n";
  echo"</form>";

  if(isset($_POST['submit'])){

  $Wrs=$pdo->prepare("INSERT INTO Workout VALUES(:Date_,:Intensity,:Type,:Duration,:Calories);");

  $Wrs->bindParam(':Intensity',$_POST['Intensity']);

  $Wrs->bindParam(':Date_',$_POST['Date']);

  $Wrs->bindParam(':Type',$_POST['Type']);

  $Wrs->bindParam(':Duration',$_POST['Duration']);

  $Wrs->bindParam(':Calories',$_POST['Calories']);

  $Wrs->execute();

  if(!$Wrs){echo"Error adding to Workout";die();}

  $Wrs=$pdo->prepare("INSERT INTO Does_Workout (ID,Date_) VALUES(:ID,:Date_);");

  $Wrs->bindParam(':ID',$_POST['ID']);

  $Wrs->bindParam(':Date_',$_POST['Date']);

  $Wrs->execute();

  if(!$Wrs){echo"Error adding to Does_Workout";die();}

  echo"<br>Workout Added!<br>";

  }
}
catch(PDOexception $e) {
  echo "Connection to database failed: " . $e->getMessage();
}

?>
</body></html>
