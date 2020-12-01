<html>

<title>Foods/Beverages Consumed</title>

<body>

<?php

include('groupdb.php');

try {
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOexception $e)
{
    echo "Connection to database failed" . $e->getMessage();
}
?>

<?php
$sql = "SELECT Eats.Eat_Date, Food_Bev.Calories, Food_Bev.Fname, Sig_Nutrient.Sname
		FROM Food_Bev 
		JOIN Eats
		ON Eats.Fname = Food_Bev.Fname
		JOIN Sig_Nutrient
		ON Sig_Nutrient.Fname = Food_Bev.Fname
		GROUP BY Food_Bev.Fname;";
$result = $pdo->query($sql); 
?>

<table border="5">
        <tr align="center">
            <th><a href="">Fname</a></th>
			<th><a href="">Eat_Date</a></th>
			<th><a href="">Calories</a></th>
			<th><a href="">Sname</a></th>
        </tr>
<?php
while($row = $result->fetch())
{
?>
	<tr align="center">
		<td><?php echo $row['Fname']; ?></td>
		<td><?php echo $row['Eat_Date']; ?></td>
		<td><?php echo $row['Calories']; ?></td>
		<td><?php echo $row['Sname']; ?></td>
	</tr>
<?php
}
?>
</table>

</body>


</html>

