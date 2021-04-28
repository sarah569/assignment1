<?php

// loop from 0 to 4
for ($i=0; $i < 5; $i++) { 
    // loop from 0 to smaller or equal value of $i
    for ($j=0; $j <= $i; $j++) { 
        // print *
        echo '*';
    }
    // print br
    echo '<br>';
}

// loop from 5 to 1
for ($i=5; $i > 0; $i--) { 
    // loop from 0 to smaller value of $i
    for ($j=0; $j < $i; $j++) { 
        // print *
        echo '*';
    }
    // print br
    echo '<br>';
}