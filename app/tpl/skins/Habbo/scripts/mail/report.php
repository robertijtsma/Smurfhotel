<?php
session_start();
include '../../classes/mail.php';
include '../config/config.php';
$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $uName, $pWord); // Create database connection.
$id = $_POST['id'];
$id = htmlentities($id, ENT_QUOTES, 'iso-8859-1'); // Prevent XSS
$id = preg_replace("/[^0-9,.]/", "", $id); // Delete all characters except numbers

$mail = new mail();
if($_POST['type'] == 'report')
    echo $mail->report($id, $dbh);
else if($_POST['type'] == 'checked')
    echo $mail->reportViewed($id, $dbh);
return;