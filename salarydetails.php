<html>
<head><title>Salary Details</title></head>
<body>
<?php
$mysqli=new mysqli("localhost:3306","root","root","mydatabase");
$empid=$_POST['empid'];
$salary=$_POST['salary'];
$rs=$mysqli->query("insert into empsalary values('$empid','$salary')");
$rs1=$mysqli->query("select * from empsalary");
echo "<html><body bgcolor=\"lightcyan\"><center>";
echo "<br><h2>EMPLOYEE SALARY DETAILS</h2>";
echo "<table  border= \"2\" cellpadding=\"10\">";
echo "<tr>";
echo "<th>Employee ID</th>";
echo "<th>Salary</th>";
echo "</tr>";
while($querydata=$rs1->fetch_array())
{
echo "<tr>";
echo "<td>$querydata[0]</td>";
echo "<td>$querydata[1]</td>";
echo "</tr>";
}
echo "</table>";
echo "</br>";
?>
<a href="allempdetails.php">Display All Employee Details</a>
</html>