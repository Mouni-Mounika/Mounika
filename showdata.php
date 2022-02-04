<!-- Showing table data of given tabale name -->
<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbSaikrishna'; 

$con = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
} 
$tableName = $_GET['tablename'];
$view = "CREATE view ". $tableName ."View AS Select *, '<button onclick = ''display(\"$value\")'' type = ''button'' class=''btn btn-default btn-sm''><span class=''glyphicon glyphicon-trash''></span> Delete </button>' AS _Delete, '<button type=''button'' class=''use-address''><span class=''glyphicon glyphicon-edit''></span>Update</button>' AS _Update from ". $tableName; 


$createView = $con->query($view);
$sql = "SELECT * FROM " . $tableName . "View";

$getColumnNames = "SHOW COLUMNS FROM ". $tableName . "View";
$columnNames = $con->query($getColumnNames);
$result = $con->query($sql);
echo "<table border = 1>";
if($columnNames->num_rows > 0)
{

	while($column = $columnNames->fetch_assoc())
	{
		echo "<th>" . $column['Field'] . "</th>";
	}
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		foreach($row as $key => $value)
		{
			echo "<td>" . $value . "</td>";	
		}

		echo "</tr>";
	}
} 
else
{
	echo "0 result";
}
echo "</table>";
?>