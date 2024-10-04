<?php

function evaluateGrade($score){
    if($score >= 90){
        echo "Grade: A\n";
    } elseif($score >= 80) {
        echo "Grade: B\n";
    } elseif($score >= 70) {
        echo "Grade: C\n";
    } elseif($score >= 60) { // Fixed here
        echo "Grade: D\n";
    } else {
        echo "Grade: F\n";
    }
}

$score = 85;
evaluateGrade($score);

?>
