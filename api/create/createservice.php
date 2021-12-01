<?php  
include("../database/db.php");

$stmt = $conn->prepare("INSERT INTO services (header, body, footer, link) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $header, $body, $footer, $link);
// set parameters and execute
var_dump($_POST);
$header = filter_var($_POST['header'], FILTER_SANITIZE_STRING);
$body = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
$footer = filter_var($_POST['footer'], FILTER_SANITIZE_STRING);
$link = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
$stmt->execute();
$stmt->close();
echo "Success";
// }

?>