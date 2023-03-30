<?php

// Connect page with database
require_once("database.inc.php");

//Select ID with username (input)
$sql = "SELECT * FROM users WHERE username = '{$_GET['username']}'";

// Show data
$result = getData($sql);

header('Content-type: application/json');

// Show result
echo json_encode($result);

