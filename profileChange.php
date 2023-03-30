<?php

require_once("database.inc.php");

// id ophalen
// id laten zien
// id bewerken
// id opslaan
// database wijzigingen zichtbaar

$sql = "UPDATE `users` SET `username`='?',`name`='?',`age`='?',`height`='?',`shoeSize`='?',`fashionDescription`='?' WHERE id='1' ";

$q = dbConnect()->prepare($sql);

header('Content-type: application/json');

echo json_encode('ok');