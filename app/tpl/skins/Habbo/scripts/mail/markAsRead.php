<?php
session_start();

include '../config/config.php';
$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $uName, $pWord); // Create database connection.
$id = $_POST['id'];
$id = preg_replace("/[^0-9,.]/", "", $id);
$id = htmlentities($id, ENT_QUOTES, 'iso-8859-1'); // Prevent XSS

$stmt = $dbh->prepare('UPDATE user_mail SET opened = 1 WHERE id = :id AND reciever_id = :rID');
$stmt->bindParam(':id', $id);
$stmt->bindParam(':rID', $_SESSION['user']['id']);
$stmt->execute();
$dbh = null;
$stmt = null;
return;