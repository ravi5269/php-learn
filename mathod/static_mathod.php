<?php
class greeting {
  public static function welcome() {
    echo "Hello static mathod \n";
  }
}

// Call static method
greeting::welcome();


class greet {
    public static function welcome() {
      echo "Hello World!\n";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  
  new greet();