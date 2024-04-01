<?php
function myMessage() {
  echo "Hello world!";
  return"welcome to funcation";


}
//call a funcation
myMessage();

echo myMessage()
?>









<?php
// PHP Function Arguments
    $cars = array(
        0 => "car1",
        1=> "car2",
        2=> "car3",
        3=> "car4",
        4=> "car5",
        5=> "car6",
        
    );
   

    
    // array_slice()
    $newCar = (array_slice($cars,2));//slice  arry and output new arry
    print_r($newCar);
    // print_r($cars);

    // array_search()
    echo array_search('car4',$cars);//search arry return key
    print_r($cars);

    // array_chunk()
    $chanked = array_chunk($cars,2); // chanked data 
    print_r($chanked);

    // array_pop()
    $poped = array_pop($cars);  //pop last 
    print_r($poped);
    // echo($poped)

    // array_push()
    array_push($cars,"car7","car8");// puah add 
    print_r($cars);
    
    //array keys
    print_r(array_keys($cars));  //all array keys
    var_dump(array_key_exists("9",$cars));  //if key is exists return true not exists return false

    echo count($cars); //count arry 

    print_r(array_count_values($cars)); ///count simlar values


    //mergge arry
    $a = array("ravi","kant");
    print_r($a);
    $b = array("patel","holkar");
    print_r($b);
    $c = array_merge($a, $b);
    print_r($c);
    


  









    
    // PHP Function Arguments
    // function familyName($fname) {
    //     echo "$fname \nRefsnes";
    //   }
      
    //   familyName("kam");
    //   familyName("ravi");
    //   familyName("kant");
    //   familyName("guli");
    //   familyName("golu");











?>