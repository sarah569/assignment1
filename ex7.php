<?php
$x = 3 ;
$y=$x++;
// $y = 7;
// $y = 8;
// $y = 9;

// $x will be 4 , $y will be 3
echo "$x <br> $y <br>";

echo "---------------- <br>";

// if $y = 7 , x will be 4
if ($y == 7) {
    $x++;
    echo $x ."<br>";
}

// if $y = 8 , x will be 2
else if ($y == 8){
    $x--;
    echo $x ."<br>";
   }

// if $y = 9 , x will be 5
else if ($y == 9) {
   $x+=2;
   echo $x ."<br>";
}
else { 
   $x= 0;
   echo $x ."<br>"; 
}


