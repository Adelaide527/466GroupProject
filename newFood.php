
<html>
<head><title>Enter meal</title></head>
<body>

<h2>Enter a new food or beverage</h2>

<form action="http://students.cs.niu.edu/~z1836805/enterFood.php" method="POST">
  <p>Name:
  <input type="text" name="name" />

  <br/>
  <br/>

  <input type="radio" name="type" value="Food" /> Food
  <input type="radio" name="type" value="Bev" /> Beverage

  <br/>
  <br/>

  Serving Size:
  <input type="text" name="num" />
  <select id="foodUnit" name="foodUnit">
    <option value="g">g</option>
    <option value="c">c</option>
    <option value="mg">mg</option>
    <option value="kg">kg</option>
    <option value="lb">lb</option>
    <option value="tbsp">tbsp</option>
    <option value=null/>
    <option value="ml">ml</option>
    <option value="oz">oz</option>
  </select>

  <br/>

  Calories:
  <input type="text" name="calories" /> cal

  <br/>
  <br/>

  Significant Nutrients (optional, can leave blank):
  <br/>
  <input type="text" name="Carbohydrates" /> mg carbs
  <br/>
  <input type="text" name="Fats" /> mg fat
  <br/>
  <input type="text" name="Protein" /> mg protein
  <br/>
  <input type="text" name="Fiber" /> mg fiber
  <br/>
  <input type="text" name="Calcium" /> mg calcium

  <br/>
  <br/>

  <input type="submit" name="submit" value="Enter Meal" />
</form>

</body>
</html>
