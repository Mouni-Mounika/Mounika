<!--Displaying table data -->
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<%
String id = request.getParameter("userid");
String driver = "com.mysql.jdbc.Driver";
String connectionUrl = "jdbc:mysql://localhost:3306/";
String database = "dbGayatri";
String userid = "root";
String password = "root";
try 
{
Class.forName(driver);
} 
catch (ClassNotFoundException e) 
{
e.printStackTrace();
}
Connection connection = null;
Statement statement = null;
ResultSet resultSet = null;
%>
<!DOCTYPE html>
<html>
<body>
<script>
		$('.use-address').click(function () 
        {
            var cashierid = $(this).closest('tr').find('td:eq(0)').text();
            var cashiername = $(this).closest('tr').find('td:eq(1)').text();

            $('#CashierID').val(cashierid);
            $('#CashierName').val(cashiername);
        })
	</script>
<table border="1">
<tr>
<td>CashierID</td>
<td>CashierName</td>
<td>Delete</td>
<td>Update</td>
</tr>
<%
try
{
connection = DriverManager.getConnection(connectionUrl+database, userid, password);
statement=connection.createStatement();
String sql ="select * from cashier";
resultSet = statement.executeQuery(sql);
while(resultSet.next()){
%>
<tr>
<td><%=resultSet.getString("CashierID") %></td>
<td><%=resultSet.getString("CashierName") %></td>
<td><button onclick = "deleteData('<%=resultSet.getString("CashierID") %>')" type='button' class='btn btn-default btn-sm'>
          <span class='glyphicon glyphicon-trash'></span> Delete 
        </button></td>
<td><button type='button' class='use-address'><span class='glyphicon glyphicon-edit'></span>Update</button></td>
</tr>
<%
}
connection.close();
} catch (Exception e) {
e.printStackTrace();
}
%>
</table>
</body>
</html>