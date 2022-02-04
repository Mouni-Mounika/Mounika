<!-- Display  item table data -->
<?php
$tableName = $_REQUEST['tableName'];
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbMounika'; 
$con = new mysqli($hostname,$username,$password,$dbname); 
if (mysqli_connect_error()) 
{ 
	die('Database connection failed: ' . mysqli_connect_error()); 
}
$sqlColumns = "SHOW COLUMNS FROM ". $tableName;
$columnNames = $con->query($sqlColumns);
$sqlAllRecords = "SELECT * FROM " . $tableName;
$allRecords = $con->query($sqlAllRecords);
echo "<table border = 1>";
if($columnNames->num_rows > 0)
{
	while($columnName = $columnNames->fetch_assoc())
	{
		echo "<th>" . $columnName['Field'] . "</th>";
	}
	while($record = $allRecords->fetch_assoc())
	{
		echo "<tr>";
		foreach($record as $key => $value)
		{
			echo "<td>" . $value . "</td>";	
		}
		echo "</tr>";
	}
} 
else 
{
	echo "0 results";
}
?>