<?php

require_once("database.inc.php");
$sql = "SELECT * FROM users WHERE username = '{$_GET['username']}'";
$result = getData($sql);

header('Content-type: application/json');

echo json_encode($result);

