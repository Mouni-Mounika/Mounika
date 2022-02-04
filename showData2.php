<!-- Display  item table data-->
<?php
$hostname='localhost'; 
$username='root'; 
$password='root'; 
$dbname='dbSaikrishna'; 

$con = new mysqli($hostname,$username,$password,$dbname); 

if (mysqli_connect_error()) { 
die('Database connection failed: ' . mysqli_connect_error()); 
}
$sql = "SELECT * FROM item";
$result = $con->query($sql);

echo "<script>
        $('.use-address').click(function () {
            var itemid = $(this).closest('tr').find('td:eq(0)').text();
            var itemdescription = $(this).closest('tr').find('td:eq(1)').text();
            var unitprice = $(this).closest('tr').find('td:eq(2)').text();
            var stockquantity = $(this).closest('tr').find('td:eq(3)').text();
            var supplierid = $(this).closest('tr').find('td:eq(4)').text();

            $('#ItemID').val(itemid);
            $('#ItemDescription').val(itemdescription);
            $('#UnitPrice').val(unitprice);
            $('#StockQuantity').val(stockquantity);
            $('#SupplierID').val(supplierid);
        })
    </script>";
echo "<table border = '1' id = 'itemtable'>
<tr>
<th>ItemID</th>
<th>ItemDescription</th>
<th>UnitPrice</th>
<th>StockQuantity</th>
<th>SupplierID</th>
<th>Delete</th>
<th>Update</th>
<tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ItemID"] . "</td>";
        echo "<td>" . $row["ItemDescription"] . "</td>";
        echo "<td>" . $row["UnitPrice"] . "</td>";
        echo "<td>" . $row["StockQuantity"] . "</td>";
        echo "<td>" . $row["SupplierID"]. "</td>";
        echo "<td><button onclick = \"deleteData('".$row["ItemID"]. "')\" type='button' class='btn btn-default btn-sm'>
          <span class='glyphicon glyphicon-trash'></span> Delete
        </button></td>";
        echo "<td><button type='button' class='use-address'><span class='glyphicon glyphicon-edit'></span>Update</button></td>";

        echo "</tr>";
    }
} else {
   echo "0 results";
}
echo "</table>";

$con->close();
?>