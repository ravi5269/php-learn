<?php

    function user_define($data){
        echo "user define funcation";
        print_r($data);
    }

    $x = array("car1","car2","car3");

    user_define($x);


    function vote($age){
        if ($age >= 18 && $age <= 65){
            return "Yes you can vote ";
        }else{
            return "No you cannot vote";
        }
    }
    echo vote(29);

    function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo $num;
?>