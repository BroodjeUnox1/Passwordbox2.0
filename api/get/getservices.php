<?php  
	$conn = new mysqli("localhost", "root", "", "pwb");
	$sql = "SELECT * FROM services";
	
	$result = $conn->query($sql);

?>