<html>
<head>
<title>All Employee Details</title>
</head>
<body>
<?php
$mysqli=new mysqli("localhost:3306","root","root","mydatabase");
$sql=$mysqli->query("select a.empid, a.name, a.age, a.doj, b.salary from employee a, empsalary b where a.empid =  b.empid");
echo "<html><body bgcolor=\"mistyrose\"><center>";
echo "<br><h2>ALL EMPLOYEE DETAILS</h2>";
echo "<table  border= \"1\" cellpadding=\"10\">";
echo "<tr>";
echo "<th>Employee ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Date of Joining</th>";
echo "<th>Salary</th>";
echo "</tr>";
while($querydata=$sql->fetch_array())
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
echo "</br>";
?>
<form method="post" action="salaryfilter.php">
Salary: <input name="salary" type="text"/>   <input type="submit" name="button" id="button" value="FILTER" /></form>
<form method="post" action="dojfilter.php">
Date of Joining: <input name="doj" type="date"/>   <input type="submit" name="button" id="button" value="FILTER" />
</form>
<a href="allempdetails.php"> Reset</a>
</html>
