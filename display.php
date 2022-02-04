<!-- Display  item table data -->
<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbGayatri'; 

$con = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
}
else 
{
    echo"cccc";
}
$sql = "SELECT * FROM myTable";
$result = $con->query($sql);
echo "<script>
        $('.use-address').click(function() 
        {
            var cashierid = $(this).closest('tr').find('td:eq(0)').text();
            var cashiername = $(this).closest('tr').find('td:eq(1)').text();

            $('#CashierID').val(cashierid);
            $('#CashierName').val(cashiername);
        })
    </script>";
echo "sss";
echo "<table border = '1' id = 'itemtable'>
<tr>
<th>CashierID</th>
<th>CashierName</th>
<th>Delete</th>
<th>Update</th>
</tr>";
echo "ttt";
if ($result->num_rows > 0) 
{
    echo "rr";
//     while($row = $result->fetch_assoc()) 
//     {
//         echo "<tr>";
//         echo "<td>" . $row["CashierID"] . "</td>";
//         echo "<td>" . $row["CashierName"] . "</td>";
//         echo "<td><button onclick = \"deleteData('".$row["CashierID"]. "')\" type='button' class='btn btn-default btn-sm'>
//           <span class='glyphicon glyphicon-trash'></span> Delete
//         </button></td>";
//         echo "<td><button type='button' class='use-address'><span class='glyphicon glyphicon-edit'></span>Update</button></td>";
//         echo "</tr>";
//     }
} 
else 
{
   echo "0 results";
}
echo "</table>";
$con->close();
?>