<?php
$message = "Hello, World!";

function printMessage() {
    echo $message;
}


function printMessage1() {
    echo $GLOBALS['message'];
}

printMessage();
printMessage1();


$text = "<script>alert('Hacked')</script>";

echo ($text);
echo htmlspecialchars($text);
?>