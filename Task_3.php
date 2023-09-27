<?php
$grades = [85, 92, 78, 88, 95];
function descendingSort($grades){
    rsort($grades);
    return $grades;
}

$sortedGrades = descendingSort($grades);
print_r($sortedGrades);