<?php

require '../../app/commmon.php';

$taskId = intval($_GET['taskId'] ?? 0);

if ($taskId < 1) {
  throw new Exception('Invalid Task ID');
}

// 1. Go to the database and get all work associated with the $taskId
$workArr = Work::getWorkByTask($taskId);

// 2. Convert to JSON
$json = json_encode($workArr);

// 3. Print
echo $json;