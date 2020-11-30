<?php
  include('db.php');

  echo "<h2>Meal Entered</h2>";

  try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT Rate FROM Conversion WHERE To_ = 'g' AND From_ = '${_POST["foodUnit"]}';";
    $rs = $pdo->query($sql);
    if(!$rs) { echo "Error in query"; die(); }
    $foodRate = $rs->fetchAll(PDO::FETCH_ASSOC);

    // Isolate the rate
    foreach($foodRate as $key => $x) {
      $rate = $x['Rate'];
    }

    $fname = $_POST['food'];
    $id = $_POST['userId'];
    $serving = $_POST['foodAmt'] * $rate;
  }
  catch(PDOexception $e) {
    echo "Fetch failed: " . $e->getMessage();
  }


  try{
    $sql = "INSERT INTO Eats(Fname, ID, Eat_Date, Serving) VALUES ('$fname', $id, CURDATE(), $serving);";
    $rs = $pdo->query($sql);
    if(!$rs) { echo "Error in query"; die(); }
    else { echo "Food successfully entered"; echo "<br/>"; }
  }
  catch(PDOexception $e) {
    echo "Fetch failed: " . $e->getMessage();
  }

  try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT Rate FROM Conversion WHERE To_ = 'g' AND From_ = '${_POST["drinkUnit"]}';";
    $rs = $pdo->query($sql);
    if(!$rs) { echo "Error in query"; die(); }
    $drinkRate = $rs->fetchAll(PDO::FETCH_ASSOC);

    // Isolate the rate
    foreach($drinkRate as $key => $x) {
      $rate = $x['Rate'];
    }

    $fname = $_POST['drink'];
    $id = $_POST['userId'];
    $serving = $_POST['drinkAmt'] * $rate;
  }
  catch(PDOexception $e) {
    echo "Fetch failed: " . $e->getMessage();
  }


  try{
    $sql = "INSERT INTO Eats(Fname, ID, Eat_Date, Serving) VALUES ('$fname', $id, CURDATE(), $serving);";
    $rs = $pdo->query($sql);
    if(!$rs) { echo "Error in query"; die(); }
    else { echo "Drink successfully entered"; echo "<br/>"; }
  }
  catch(PDOexception $e) {
    echo "Fetch failed: " . $e->getMessage();
  }

  include('home.php');

?>
