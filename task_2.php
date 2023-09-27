<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

$filteredNumbers = array_filter($numbers, function($resultArray){
    return $resultArray%2!==0;
});
print_r($filteredNumbers);