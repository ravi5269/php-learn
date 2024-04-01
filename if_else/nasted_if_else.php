<?php
    $age = 66;
    // if ($age >=18){
    //     echo "Yes you can vote";
    // }
    //     elseif( $age == 17){
    //         echo "please wait one more year";
    //     }
    //         elseif( $age == 16){
    //             echo "please wait two more year";
    //             }
    //             else {
    //                 echo "You can not voating";
    //             }

    
    // nested if -else
    if ($age >= 18){
        if ($age <=66){
            echo "Yes you can vote";
        }else{
            echo " you can not vote any more ";
        }
    }else
        echo "Yon can't vote";
?>