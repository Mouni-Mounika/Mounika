<!-- Deleteing data from the table using JSP -->
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*, java.util.*, java.io.* "%>

<%
String cashierID = request.getParameter("CashierID");
try
{
Class.forName("com.mysql.jdbc.Driver");
Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/dbGayatri", "root", "root");
Statement st = conn.createStatement();
String deleteStatement = "DELETE FROM cashier WHERE CashierID = '" + cashierID + "'";
int i = st.executeUpdate(deleteStatement);
if( i > 0)
{
	out.println("");
}
}
catch(Exception e)
{
out.println(e);
}
%>