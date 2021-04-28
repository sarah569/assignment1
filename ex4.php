<?php

// loop from 1 to 12
for ($i=1; $i <= 12; $i++) { 
    // loop from 1 to 12
    for ($j=1; $j <= 12; $j++) { 
        // print the value of i and * and the value of j and the value of multiplcation of i and j
        echo "$i * $j = " . $i * $j;
        // print br
        echo "<br>";
    }
    echo "--------------------";
    echo "<br>";
}