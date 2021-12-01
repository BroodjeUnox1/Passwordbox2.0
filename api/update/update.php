<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwb";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE passwords SET user = :user, password = :password, application = :application, link= :link, icon= :icon where id = :id");


    $user = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $application = filter_var($_POST['application'], FILTER_SANITIZE_STRING);
    $link = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
    $icon = filter_var($_POST['icon'], FILTER_SANITIZE_STRING);
    $id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);


    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':application', $application);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':icon', $icon);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    echo "Success";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
