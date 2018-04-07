<html>
<head><title>Salary Filter</title></head>
<body>
<?php
$mysqli=new mysqli("localhost:3306","root","root","mydatabase");
$salary=$_POST['salary'];
$result=$mysqli->query("select a.empid, a.name, a.age, a.doj, b.salary from employee a, empsalary b where a.empid =  b.empid and b.salary = $salary");
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
while($querydata=$result->fetch_array())
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