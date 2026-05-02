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
    echo 'User registered';
}

registerUser1();

echo $x; // ✅ now works
echo $y;
?>