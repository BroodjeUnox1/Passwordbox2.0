<?php 
include("../database/db.php");

$id = $_POST["id"];

$sql = "DELETE FROM passwords WHERE id = $id";

if ($conn->query($sql)) {
	echo "Success";
}

 ?>