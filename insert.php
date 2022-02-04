<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbGayatri'; 

$con = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
}
$CashierID = $_GET["CashierID"];
$CashierName = $_GET["CashierName"];
$sql = "INSERT INTO cashier (CashierID, CashierName) VALUES ('" . $CashierID . "', '" . $CashierName ."') ON DUPLICATE KEY UPDATE CashierID = '" . $CashierID . "', CashierName = '" . $CashierName ."'";
if(mysqli_query($con, $sql))
{
	echo" ";
}
else
{
	 echo("Error: sql could not execute properly.".mysqli_error($con));
}
$con->close();
?>