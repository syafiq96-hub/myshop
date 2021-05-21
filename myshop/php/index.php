<!DOCTYPE html>
<html>

<head>
	<title>MyShop</title>
	<style>
table {
border-collapse: collapse;
width: 100%;
color: #387D14;
font-family: monospace;
font-size: 25px;
text-align: left;
}

th {
background-color: #387D14;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<div class="header">
		<h1>MyShop</h1>	
	</div>
<br></br>
	<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Type</th>
<th>Price (RM)</th>
<th>Quantity</th>
<th>Date create</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "myshopdb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, type, price, quantity, datecreate FROM tbl_products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["type"] . "</td><td>" .$row["price"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["datecreate"] .
    "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

	<div class="bottomnavbar">
		<a href="../html/newproduct.html">Add Newproduct</a>
	</div>

	

</body>

</html>