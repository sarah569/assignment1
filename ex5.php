<?php
// $input array contain values
$input = [1,1,2,3,5,8,3,7,8,7];
// $output array empty
$output = [];

// loop to $input array and $inputNum is the values in it
foreach ($input as $inputNum) {
    // loop to $output array and $outputNum is the values in it
    foreach ($output as $outputNum) {
        // if the value in $input array = value in $output array put it in $output array
        if($inputNum == $outputNum) {
            //
            continue 2;
        }
    }
    // put the repeated value in $output array
    $output[] = $inputNum;
}
// print $output array
print_r($output);