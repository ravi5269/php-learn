<?php
    // greet();
    // function greet() {
    //     echo "hello\n";
    //     greet();             //infnite
    // }

        
    function countNumber($start)
    {
        if ($start <= 10) {
            echo "$start\n";
            $start++;
            countNumber($start);
        }else{
            return;
        }
    }
countNumber(1);

?>