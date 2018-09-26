<?php
class Teams{
  public $team_id;
  public $name;
  public $hourly_rate;

  public static function getAll() {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    // 2. Prepare the query
    $sql = 'SELECT * FROM Team';
    $statement = $db->prepare($sql);
    // 3. Run the query
    $success = $statement->execute(
        [$taskId]
    );
    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      // 4.a. For each row, make a new work object
      $teamItem =  new Team($row);
      array_push($arr, $workItem);
    }
    // 4.b. return the array of work objects
    return $arr;
  }
}