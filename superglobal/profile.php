<?php
$head = "User Profile";
$line = "------------";
$name = $_GET['name'] ?? 'No name passed';
$age = isset($_GET['age']) ? filter_var($_GET['age'], FILTER_VALIDATE_INT) : 'No age passed';
$country = isset($_GET["country"]) ? $_GET['country'] : 'No country passed';
$adult = ($age >= 18) ? "true" : "false";
echo $head . "\n" . $GLOBALS['line'] . "\nName: " . $name . "\nAge: " . $age . "\nCountry: " . $country . "\n" . "Adult: " . $adult;
?>

<?php
if (isset($_GET['score']) && filter_var($_GET['number'], FILTER_SANITIZE_NUMBER_INT)) {
    $score = ($age >= 18) ? "Pass" : "Fail";
}
?>
