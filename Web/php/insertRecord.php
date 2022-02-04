<!-- Display  item table data-->
<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbGayatri'; 

$conn = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
}
$ItemID = $_GET["CashierID"];
$ItemDescription = $_GET["CashierName"];
$sql = "INSERT INTO items (CashierID, CashierName) VALUES ('" . $CashierID . "', '" . $CashierName ."') ON DUPLICATE KEY UPDATE CashierID = '" . $CashierID . "', CashierName = '" . $CashierName ."'";
if(mysqli_query($conn, $sql))
{
	echo"Data recorded successfully.";
}
else
{
	 echo("Error: sql could not execute properly.".mysqli_error($conn));
}
$con->close();
?>