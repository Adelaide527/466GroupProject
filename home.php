<?php
  //  JUST REPLACE THIS LINE WITH THE URL YOU NEED
  $url = "http://students.cs.niu.edu/~z1836805/";
  //  REPLACE THE ABOVE LINE IF PHP IS NOT SUBMITTING
?>

<html>
<head><title>Home</title></head>
<body>

<h2>Randomly Assigned 5</h2>

<br/>

<?php
  // This will work assuming the php files are named as they are in github
  $page1 = $url."newFood.php";
  echo "<a href=$page1>Enter a new Food<a/>";

  echo "<br/>";

  $page2 = $url."page2.php";
  echo "<a href=$page2>Update your weight<a/>";

  echo "<br/>";

  $page3 = $url."meal.php";
  echo "<a href=$page3>Enter a Meal<a/>";

  echo "<br/>";

  $page4 = $url."page4.php";
  echo "<a href=$page4>See all meals eaten over a period of time<a/>";

  echo "<br/>";

  $page5 = $url."page5.php";
  echo "<a href=$page5>Enter a Workout<a/>";

  echo "<br/>";

  $page6 = $url."page6.php";
  echo "<a href=$page5>See all workouts over a period of time<a/>";

?>

</body>
</html
