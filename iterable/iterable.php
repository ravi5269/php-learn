<?php

// The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type 
// for function arguments and function return values.

function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item;
    }
  }
  
  $arr = ["a", "b", "c"];
  
  printIterable($arr);