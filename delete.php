<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbGayatri'; 

$con = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) 
{ 
	die('Database connection failed: ' . mysqli_connect_error()); 
}

$CashierID = $_GET["CashierID"];
$sql = "DELETE FROM cashier WHERE CashierID ='" . $CashierID . "'";
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