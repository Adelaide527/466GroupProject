<html><head><title>Workouts</title></head><body>
<?php

include('secrets.php');


try{
        //Connects to Dadabase
  $dsn = "mysql:host=courses;dbname=z1871561";
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  echo"<header>";
  echo"<h1>Enter Your Workout</h1>";
  echo"</header>";

  echo"<form action='http://students.cs.niu.edu/~z1871561/page5Sub.php' method='GET'>";

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
  echo"Duration:<input type='text' name='Duration'/><br>";
  //Holds the Calories Burnt
  echo"Calories Burned:<input type='text' name='Calories'/><br>";
  //Holds the Date
  echo"Date:<input type='date' name='Date'/><br>";

  //Creates a button to submit
  echo"<input type='submit' name='submit'/>\n";
  echo"</form>";



}
catch(PDOexception $e) {
  echo "Connection to database failed: " . $e->getMessage();
}

?>
</body></html>
