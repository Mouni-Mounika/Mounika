<!-- Delete item from  table data-->
<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbSaikrishna'; 

$con = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
}

$ItemID = $_GET["ItemID"];
$sql = "DELETE FROM item WHERE ItemID ='" . $ItemID . "'";
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
