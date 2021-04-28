<?php

// variable contain 3
$var = 3;

// match method that connect diffrent values to diffrent keys
$number = match($var) {
    0 => 'zero',
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'sex',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    default => "this number isn't in the range"
};

//print the value where $var = 3
echo $number;