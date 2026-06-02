<?php
    


$calculateAverage2 = function(float ...$numbers) {
    return array_sum($numbers) / count($numbers);
    };
    
$averageSum = $calculateAverage2(1,2,3,4);


function calculateAverage3(float ...$numbers): float {
    if (count($numbers) === 0) {
        return 0;
        }
    
    $sum = array_sum($numbers);

    $GLOBALS['sum'] = $sum;
    
    return array_sum($numbers) / count($numbers);
}

function determineGrade(float $score): string {
    if ($score >= 70) {
        $score =+ 10;
        echo "score: " . $score;
        // $score = "A"x`;
        } elseif ($score >= 60) {
        $score = "B";
        } elseif ($score >= 50) {
        $score = "C";
        } elseif ($score >= 40) {
        $score = "D";
        } elseif ($score < 40) {
        $score = "F";
        }
    return $score;

}
$avg1 = calculateAverage3(54,71,63,66,55,58);



$header = "Student Report";
$line = "--------------";
// $name = "";
// Average: 75
// Grade: A
// Status: ACTIVE
// Attempts: 1
// Bonus Applied Score: 85;
 
echo $header . $line . "\nAverage: " . $avg1 . "\nStatus: " . $GLOBALS['sum'] . "\nGrade: " . determineGrade($avg1);


$calculateAverage4 = fn(float ...$numbers): float => array_sum($numbers) / count($numbers);
// echo "\nAverage4 : " . $calculateAverage4(1,2,3,4);
