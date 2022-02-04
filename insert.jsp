<!-- Inserting data into the table using JSP -->
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*, java.util.*, java.io.* "%>;

<%
String cashierID = request.getParameter("CashierID");
String cashierName = request.getParameter("CashierName");
try
{
	Class.forName("com.mysql.jdbc.Driver");
	Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/dbGayatri", "root", "root");
	Statement st = conn.createStatement();
	String insertStatement = "INSERT INTO cashier (CashierID, CashierName) VALUES('" + cashierID + "','" + cashierName + "') ON DUPLICATE KEY UPDATE CashierID = '" + cashierID + "', CashierName = '" + cashierName + "'";
	int i = st.executeUpdate(insertStatement);
	if( i > 0)
	{
		out.println(" ");
	}
}
catch(Exception e)
{
	out.println(e);
}
%>