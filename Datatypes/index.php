<?php
$name = 'Brad';
$age = 40;
$_V = 2;
$has_child = true;
$cash_at_hand = 20.55;
// echo $cash_at_hand;


var_dump($cash_at_hand);
// echo $name. ' is '. $age. ' years old';
echo "${name} is ${age} years old"; //Deprecated
$x = '5' + '5';
echo"($x)<br><br>";
 

$str = "This is PHP";
echo $str[0];
echo strlen($str). '<br><br>';


$num1 = 12;
echo $num1;
var_dump($num1);

?>

<?php
$float1 = 12.4;
$newfloat1 = 0;
echo $float1;
var_dump($float1);
var_dump((int)$float1);
?>


<?php
$float2 = 12.9;
echo $float2;
var_dump($float2);
var_dump((int)$float2);
?>

<?php

$amount =  (int)'This 100 USD';
echo $amount; // 0
?>


<?php

$amount =  (int)'100 USD';
echo $amount; // 100
?>

<?php

$amount =  (int)strlen('This is 100 USD');
echo $amount; // 15
?>

<?php

$numbers = [1,2,3];
// $str = (string)$numbers;

echo $str; // Array
?>
<?php

$amount = 100;
var_dump($amount);
$x = $amount . " USD"; // 100 USD
var_dump($x);
?>

<?php
$qty = '20';
if($qty == (int)'20') {
    echo 'Equal'; //type juggling
} else {
    echo 'False';
}
?>

<?php
$qty = 20;
if((string)$qty === 20) {
    echo 'Equal'; //type juggling
    } else {
        echo 'False';
}
?>