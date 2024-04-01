<?php



$i = 1;
while ($i <= 6) {
    echo $i;
    $i++;
}
echo "loop end\n ";




//break break
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

//contiinue
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}



$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;



// step 10 
$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i ;
}




?>