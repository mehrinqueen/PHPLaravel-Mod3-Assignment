<?php
$studentGrades=[
    ['Math'=> 50, 'English'=> 65, 'Science'=> 75],
    ['Math'=> 80, 'English'=> 86, 'Science'=> 70],
    ['Math'=> 100, 'English'=> 95, 'Science'=> 95]
];

function averageGrade($studentGrades){
    foreach($studentGrades as $students){
        $average = array_sum($students)/count($students);
        echo "Average grade for this student: {$average}\n";
    }
}
averageGrade($studentGrades);