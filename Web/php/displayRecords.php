<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbGayatri'; 

$conn = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connnect_error()) { 
die('Database connnection failed: ' . mysqli_connnect_error()); 
}
$sql = "SELECT * FROM cashier";
$result = $conn->query($sql);

echo "<script>
        $('.use-address').click(function () {
            var cashierid = $(this).closest('tr').find('td:eq(0)').text();
            var cashiername = $(this).closest('tr').find('td:eq(1)').text();

            $('#CashierID').val(cashierid);
            $('#CashierName').val(cashiername);
        })
    </script>";
echo "<table border = '1'>
<tr>
<th>CashierID</th>
<th>CashierName</th>
<th>Delete</th>
<th>Update</th>
<tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["CashierID"] . "</td>";
        echo "<td>" . $row["CashierName"]. "</td>";
        // echo "<td><button onclick = \"deleteRecord('".$row["CashierID"]. "')\" type='button' class='btn btn-default btn-sm'>
        //   <span class='glyphiconn glyphiconn-trash'></span> Delete
        // </button></td>";
        // echo "<td><button type='button' class='use-address'>Update</button></td>";

        echo "</tr>";
    }
} else {
   echo "0 results";
}
echo "</table>";

$conn->close();
?>
