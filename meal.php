<html>
<head><title>Enter meal</title></head>
<body>
<?php?>

<h2>Enter a meal</h2>

<form action="" method="POST">
  <p> Enter name of user: </p>

  <input type="text" name="name" />

  <p>Enter food:
    <select id="food">
      <option value=null/>
      <option value="one">Chips</option>
      <option value="two">Tacos</option>
      <option value="three">Cheese</option>
    </select>
    <input type="text" name="foodAmt" />
    <select id="foodUnit">
      <option value=null/>
      <option value="c">c</option>
      <option value="mg">mg</option>
      <option value="g">g</option>
      <option value="kg">kg</option>
      <option value="lb">lb</option>
      <option value="tbsp">tbsp</option>
      <option value="tsp">tsp</option>
    </select>
  </p>

  <p>Enter drink:
    <select id="drink">
      <option value=null/>
      <option value="tea">Tea</option>
      <option value="two">Coffee</option>
      <option value="three">Water</option>
    </select>
    <input type="text" name="drinkAmt" />
    <select id="drinkUnit">
      <option value=null/>
      <option value="oz">oz</option>
      <option value="ml">mL</option>
    </select>
  </p>

  <input type="submit" name="submit" value="Enter Meal" />
</form>

</body>
</html>
