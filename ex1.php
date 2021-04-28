<?php

// array of numbers
$numbers = [10 , 20 , 30 , 50 , 5 , 3 , 9 ,15];

// get number of elements in $numbers array
$numOfElements = count($numbers);

// let $max be the first value in first index
$max = $numbers[0];

// let $min be the first value in first index
$min = $numbers[0];

//loop from 0 until the end of array
for ($i=0; $i < $numOfElements; $i++) { 
    //if the value in index of array smaller than the value in $max
    if ($max <= $numbers[$i]) {
        //put the new value in $max
        $max = $numbers[$i];
    }
}

//loop from 0 until the end of array
for ($i=0; $i < $numOfElements; $i++) { 
    //if the value in index of array greater than the value in $max
    if ($min > $numbers[$i]) {
        //put the new value in $min
        $min = $numbers[$i];
    }
}

//print $max and $min
echo $max . '<br>';
echo $min;

