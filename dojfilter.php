<html>
<head><title>Date of Joining Filter</title></head>
<body>
<?php
$mysqli=new mysqli("localhost:3306","root","root","mydatabase");
$doj=$_POST['doj'];
$rs1=$mysqli->query("select a.empid, a.name, a.age, a.doj, b.salary from employee a, empsalary b where a.empid =  b.empid and a.doj = '$doj'");
echo "<html><body bgcolor=\"mistyrose\"><center>";
echo "<br><h2>EMPLOYEE DETAILS</h2>";
echo "<table  border= \"1\" cellpadding=\"10\">";
echo "<tr>";
echo "<th>Employee ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Date of Joining</th>";
echo "<th>Salary</th>";
echo "</tr>";
while($querydata=$rs1->fetch_array())
{
echo "<tr>";
echo "<td>$querydata[0]</td>";
echo "<td>$querydata[1]</td>";
echo "<td>$querydata[2]</td>";
echo "<td>$querydata[3]</td>";
echo "<td>$querydata[4]</td>";
echo "</tr>";
}
echo "</table>";
?>