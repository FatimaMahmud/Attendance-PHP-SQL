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

$sql="SELECT * FROM attendance WHERE classid = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>student id</th>
<th>class id</th>
<th>Present </th>
<th>Class</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['studentid'] . "</td>";
    echo "<td>" . $row['classid'] . "</td>";
    echo "<td bgcolor=red>" . $row['isPresent'] . "</td>";
    echo "<td>" . $row['comments'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>