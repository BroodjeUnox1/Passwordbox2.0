<?php  
include("../database/db.php");

$stmt = $conn->prepare("INSERT INTO passwords (user, password, application, link, icon) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $user, $password, $application, $link, $icon);
// set parameters and execute
$user = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$application = filter_var($_POST['application'], FILTER_SANITIZE_STRING);
$link = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
$icon = filter_var($_POST['icon'], FILTER_SANITIZE_STRING);
$stmt->execute();
$stmt->close();
echo "Success";
// }

?>