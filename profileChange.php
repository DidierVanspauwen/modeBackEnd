<?php

require_once("database.inc.php");

$username = htmlentities($_POST['username']);
$firstName = htmlentities($_POST['firstName']);
$age = htmlentities($_POST['age']);
$length = htmlentities($_POST['length']);
$shoeSize = htmlentities($_POST['shoeSize']);
$fashionDescription = htmlentities($_POST['fashionDes']);

$sql = "UPDATE `users` SET username=? , name=?, age=?, height=?, shoeSize=?, fashionDescription=? WHERE id = ? ";

$q = dbConnect()->prepare($sql);

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

echo json_encode('ok');