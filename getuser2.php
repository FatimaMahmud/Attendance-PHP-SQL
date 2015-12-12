<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = intval($_GET['q']);
$con = mysqli_connect ('localhost','root','','attendance');

if(!$con)
	die('Cannot connect to database due to ' . mysqli_error($con));

$sql="SELECT * FROM students";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Id</th>
<th>Regno</th>
<th>Full Name</th>
<th>Class</th>
<th>Section</th>
<th>Address</th>
<th>Contact</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['reg.no.'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['class'] . "</td>";
    echo "<td>" . $row['section'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>