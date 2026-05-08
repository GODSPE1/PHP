<?php
$y = 12;
global $x;
function registerUser() {
    $x = 10;
    echo 'User registered';
    global $y;
}
    
    echo $x;   
    echo $y;
    registerUser()
?>


<?php
$y = 12;

function registerUser1() {
    global $x;   // now linked to global scope
    $x = 10;     // modifies global $x
    echo 'User registered' . '<br>';
}

registerUser1();

echo "$x <br>"; // ✅ now works
echo $y  . '<br>';
?>

<?php
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($n) {
    return $n ** 2;
}, $numbers);

print_r($squared);


function square($y) {
    return $y ** 2;
};
echo call_user_func_array('square', $numbers);
$squared = array_map("square", $numbers);

print_r($squared);


$squared = array_map(fn($n) => $n ** 2, $numbers);
print_r($squared);




var_dump($numbers);
"<br>";
var_export($numbers);
print_r($numbers);
?>

<?php
$z = 3;
$fn = fn($x) => fn($y) => $x * $y + $z;
var_export($fn(4)(10));
?>

<?php
function greet($name) {
    return "Hello, " . $name . "!";
}
function processUser($callback) {
    $name = "GFG";
    echo $callback($name);
}
processUser('greet');


?>