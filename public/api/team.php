<?php

require '../../app/commmon.php';

//$taskId = intval($_GET['taskId'] ?? 0);

//if ($taskId < 1) {
  //throw new Exception('Invalid Task ID');
//}

// 1. Go to the database and get all work associated with the $taskId
$teams = Team::getAll();

// 2. Convert to JSON
$json = json_encode($teams);

// 3. Print
header('Content-Type: application/json');
echo $json;
