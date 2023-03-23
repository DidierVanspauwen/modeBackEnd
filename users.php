<?php

require_once("database.inc.php");
$sql = "SELECT * FROM users WHERE id = {$_GET['id']}";
$result = getData($sql);

header('Content-type: application/json');

echo json_encode($result);

