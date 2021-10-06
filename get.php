<!DOCTYPE html>
<html>
    <head>
    <style>
body
{
    background-color: #15172b;
}
table {
border-collapse: collapse;
/*color: #588c7e;*/
background-color:#ABCDEF;
width: 50%;
  border-radius: 20px;
  box-sizing: border-box;
font-family: monospace;
font-size: 25px;
text-align: left;

}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<center>
<br><br><br>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Department</th>
<th>Age</th>
</tr>
<?php
include 'connect.php';?>
<?php
$sql = "SELECT id, name, department , age FROM employee";
$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] ."</td><td>" . $row["department"] . "</td><td>"
        . $row["age"]. "</td></tr>";
        }
        echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</table>
</center>
</body>
</html>