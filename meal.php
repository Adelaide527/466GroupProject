<html>
<head><title>Enter meal</title></head>
<body>

<h2>Enter a meal</h2>

<form action="http://students.cs.niu.edu/~z1836805/eaten.php" method="POST">
  <p> Enter userId: </p>

  <input type="text" name="userId" />

  <p>Enter food:
    <select id="food" name="food">

<?php
  include('groupdb.php');

  try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM Food_Bev WHERE Type = 'Food';";
    $rs = $pdo->query($sql);
    if(!$rs) { echo "Error in query"; die(); }
    $foods = $rs->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOexception $e) {
    echo "Fetching foods failed: " . $e->getMessage();
  }

  try{
    $sql = "SELECT * FROM Food_Bev WHERE Type = 'Bev';";
    $rs = $pdo->query($sql);
    if(!$rs) { echo "Error in query"; die(); }
    $drinks = $rs->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOexception $e) {
    echo "Fetching drinks failed: " . $e->getMessage();
  }

  foreach ($foods as $key => $x ) {
    echo "<option value=$x[Fname]>$x[Fname]</option>";
  }

?>
    </select>
    Serving Size:
    <input type="text" name="foodAmt" value="1"/>
    <select id="foodUnit" name="foodUnit">
      <option value="g">g</option>
      <option value="c">c</option>
      <option value="mg">mg</option>
      <option value="kg">kg</option>
      <option value="lb">lb</option>
      <option value="tbsp">tbsp</option>
      <option value="tsp">tsp</option>
    </select>
  </p>

  <p>Enter drink:
    <select id="drink" name="drink">
<?php
  foreach ($drinks as $key => $x ) {
    echo "<option value=$x[Fname]>$x[Fname]</option>";
  }
?>

    </select>
    Serving Size:
    <input type="text" name="drinkAmt" value="8"/>
    <select id="drinkUnit" name="drinkUnit">
      <option value="oz">oz</option>
      <option value="ml">mL</option>
    </select>
  </p>

  <input type="submit" name="submit" value="Enter Meal" />
</form>

</body>
</html>
