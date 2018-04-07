<html>
<head><title>Employee Details</title></head>
<body>
<?php
$mysqli=new mysqli("localhost:3306","root","root","mydatabase");
$name=$_POST['name'];
$age=$_POST['age'];
$empid=$_POST['empid'];
$doj=$_POST['doj'];
$rs=$mysqli->query("insert into employee values('$name','$age','$empid','$doj')");
$rs1=$mysqli->query("select * from employee");
echo "<html><body bgcolor=\"lightcyan\"><center>";
echo "<br><h2>EMPLOYEE DETAILS</h2>";
echo "<table  border= \"2\" cellpadding=\"10\">";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Employee ID</th>";
echo "<th>Date of Joining</th>";
echo "</tr>";
while($querydata=$rs1->fetch_array())
{
echo "<tr>";
echo "<td>$querydata[0]</td>";
echo "<td>$querydata[1]</td>";
echo "<td>$querydata[2]</td>";
echo "<td>$querydata[3]</td>";
echo "</tr>";
}
echo "</table>";
echo "</br>";
?>
<a href="enterempdetails.php"> Enter Another Employee</a><br><br>
<a href="entersalarydetails.php"> Enter Salary</a>