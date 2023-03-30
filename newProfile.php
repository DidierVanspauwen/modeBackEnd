<?php

require_once("database.inc.php");

$sql = "INSERT INTO users (username, name, age, height, shoeSize, fashionDescription) VALUES (?, ?, ?, ?, ?, ?)";

$q = dbConnect()->prepare($sql);

$result = $q->execute([
    $_POST['username'],
    $_POST['firstName'],
    $_POST['age'],
    $_POST['length'],
    $_POST['shoeSize'],
    $_POST['fashionDes']
]);

header('Content-type: application/json');

echo json_encode('ok');