<?php
  include('db.php');

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

    $fname = $_POST['name'];
    $serving = $_POST['num'] * $rate;
    $calories = $_POST['calories'];
    $type = $_POST['type'];

    try{
      $sql = "INSERT INTO Food_Bev(Fname, Serving_Size, Calories, Type) VALUES ('$fname', $serving, $calories, '$type');";
      $rs = $pdo->query($sql);
      if(!$rs) { echo "Error in query"; die(); }
      else { echo "Food successfully entered into database"; echo "<br/>"; }
    }
    catch(PDOexception $e) {
      echo "Fetch failed: " . $e->getMessage();
    }

    foreach($_POST as $key => $x) {
      if($key != 'name' && $key != 'num' && $key != 'foodUnit' && $key != 'calories' &&
	 $key != 'type' && $key != 'submit') {
	$nutrient = $x."mg";
        try{
          $sql = "INSERT INTO Sig_Nutrient(Fname, Sname, Amount) VALUES ('$fname', '$key', '$nutrient');";
          $rs = $pdo->query($sql);
          if(!$rs) { echo "Error in query"; die(); }
          else { echo $key." successfully entered"; echo "<br/>"; }
        }
        catch(PDOexception $e) {
	  echo "<br />";
          echo "Unable to add".$key." to database: " . $e->getMessage();
        }
      }
    }

  }
  catch(PDOexception $e) {
    echo "Fetch failed: " . $e->getMessage();
  }

  include('home.php');

?>
