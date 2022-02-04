<!-- Delete item from  table data-->
<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbGayatri'; 

$conn = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
}

$CashierID = $_GET["CashierID"];
$sql = "DELETE FROM cashier WHERE ItemID ='" . $CashierID . "'";
if(mysqli_query($conn, $sql))
{
	echo" ";
}
else
{
	 echo("Error: sql could not execute properly.".mysqli_error($conn));
}

$conn->close();
?>
