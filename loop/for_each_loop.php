<?php

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "\n $x";
}

$arr =[
    "html" => 2500,
    "css"  =>  3286,
    "js"    =>  7997,
    "php" => 3475,
];
print_r($arr);

foreach ($arr as $course => $fees) {
    echo "the fees of $course is $fees\n"; //dobble code inside variable 
}
?>