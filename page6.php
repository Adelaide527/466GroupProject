\<html><head><title>Workouts</title></head><body>
<?php

include('groupdb.php');


try{
 
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  echo"<header>";
  echo"<h1>Enter Your Workout</h1>";
  echo"</header>";

  echo"<form action='http://students.cs.niu.edu/~z1871561/page6.php' method='POST'>";

  //Holds the ID
  echo"Enter your ID:<input type='text' name='ID'/><br>";

  echo"Workouts Between:<br>";


  echo"Start Date:<input type='date' name='Sdate'/><br>";
  echo"End Date:<input type='date' name='Edate'/><br>";

  //Creates a button to submit
  echo"<input type='submit' name='submit'/>\n";
  echo"</form>";

  if(isset($_POST['submit'])){


  $Wrs=$pdo->prepare("SELECT * FROM Workout WHERE Date_ IN (SELECT Date_ FROM Does_Workout WHERE ID=:ID);");

  $Wrs->execute(array(":ID" => $_POST["ID"]));

  $Wrows=$Wrs->fetchALL(PDO::FETCH_ASSOC);

  echo"<header>";
  echo"<h1>Workouts:</h1>";
  echo"</header>";

  //Makes a table to hold the workouts chosen
  echo"<table border=1 cellspacing=1>";
  echo "<tr>";
  //Inserts column titles
  foreach($Wrows[0] as $key => $item) {
    echo"<th>$key</th>";
  }
  echo "</tr>";
  //Inserst the row returned from the query
  foreach($Wrows as $row) {
    echo"<tr>";
    echo"<td>". $row["Date_"]."</td><td>".$row["Intensity"]."</td><td>".$row["Type_"]."</td><td>".$row["Duration"]." min"."</td><td>".$row["Calories_Burnt"]."</td>"; 
    echo"</tr>";
  }
  echo"</table>";

  $Ars=$pdo->prepare("SELECT SUM(Calories_Burnt), AVG(DISTINCT Calories_Burnt) FROM Workout WHERE Date_ IN (SELECT Date_ FROM Does_Workout WHERE ID=:ID);");

  $Ars->execute(array(":ID" => $_POST["ID"]));

  $Arows=$Ars->fetchALL(PDO::FETCH_BOTH);


 echo"<br>Total Calories Burned: ".$Arows[0]["SUM(Calories_Burnt)"];

 echo"<br>Average Calories Burned per Workout: ".$Arows[0]["AVG(DISTINCT Calories_Burnt)"];


 }

}
catch(PDOexception $e) {
  echo "Connection to database failed: " . $e->getMessage();
}

?>
</body></html>
