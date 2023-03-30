<?php

// Connect page with database
require_once("database.inc.php");

// Update the following elements
// HTML code not possible
$username = htmlentities($_POST['username']);
$firstName = htmlentities($_POST['firstName']);
$age = htmlentities($_POST['age']);
$length = htmlentities($_POST['length']);
$shoeSize = htmlentities($_POST['shoeSize']);
$fashionDescription = htmlentities($_POST['fashionDes']);

// Select table and update ID with input
$sql = "UPDATE `users` SET username=? , name=?, age=?, height=?, shoeSize=?, fashionDescription=? WHERE id = ? ";

// Prepare the query
$q = dbConnect()->prepare($sql);

// Push input to database
$q->execute([
    $username,
    $firstName,
    $age,
    $length,
    $shoeSize,
    $fashionDescription,
    $_GET['id']
]);

header('Content-type: application/json');

// Confirm with 'ok'
echo json_encode('ok');