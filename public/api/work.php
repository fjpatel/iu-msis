<?php

echo "foo\n";
echo 'bar';

$name = 'Phil';

//echo "\n";
echo "My name is {$name}\n";
echo "My name is " .$name;  //period means concate in php

class Animal
{
  public $type = 'Pig';
}

$wilbur = new Animal ();
echo $wilbur->type;

if (true) {
} else {
}

for ($i = 0; $i<10; $i++) {
  //stuff
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$id = $_GET['id'] ?? 0;

$arr1 = [   //associated array
  'first' => 'Tom',
  'last' => 'Gregory'
];

$arr2 = [ 'one', 'two', 'three']


//file:///Users/fjpatel/Desktop/iu-msis/public/api/work.php
