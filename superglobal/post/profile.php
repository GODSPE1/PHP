<?php

$head = "User Profile";
$line = "------------";

$name = $_POST['name'] ?? 'No name passed';

$age = isset($_POST['age']) 
? filter_var($_POST['age'], FILTER_VALIDATE_INT)  
: null;

$country = $_POST['country'] ?? 'No country passed';

$score = isset($_POST['score'])
    ? filter_var($_POST['score'], FILTER_VALIDATE_INT)
    : null;

$adult = ($age !== null && $age >= 18) 
? "true" 
: "false";

$result = ($score !== null && $score >= 50) 
    ? "Pass"
    : "Fail";

echo $head . "<br>";
echo $line . "<br>";

echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Age: " . $age . "<br>";
echo "Country: " . htmlspecialchars($country) . "<br>";
echo "Adult: " . $adult . "<br>";
echo "Score Result: " . $result;

?>