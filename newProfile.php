<?php

// Connect page with database
require_once("database.inc.php");

// Add new profile by creating new ID
$sql = "INSERT INTO users (username, name, age, height, shoeSize, fashionDescription) VALUES (?, ?, ?, ?, ?, ?)";

// Connect with database 
$q = dbConnect()->prepare($sql);

// Place data in the following rows
$result = $q->execute([
    $_POST['username'],
    $_POST['firstName'],
    $_POST['age'],
    $_POST['length'],
    $_POST['shoeSize'],
    $_POST['fashionDes']
]);

header('Content-type: application/json');

// Confirm with 'ok'
echo json_encode('ok');