<?php

class Work {
  public $id;
  public $start_date; //YYYY-MM-DD
  public $end_date;

  public function __construct($row) {
    $this->id = $row['id'];

    $this->start_date = $row['start_date'];
    $this->end_date = $row['end_date'];
  }

  public static function getWorkByTask(int $taskId){
    // 1. Connect to Database
    // 2. Run a query
    // 3. Read the results
    // 4. FOr each row, make a new work object
    // 5. return the array
    return [];
  }

}
