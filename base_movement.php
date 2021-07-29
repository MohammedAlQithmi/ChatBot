<?php 

require 'DataBase.php';

$sql = "SELECT * FROM movement";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
echo $row["movement"];
	
$conn->close();

 ?>