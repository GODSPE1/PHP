<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

?>


<?php
define("ROLE","Admin"); // This uses define function for constant
$name = "John";
$age = 25;
ob_start();
var_dump($age);
ob_end_clean(); 

$country = "Nigeria";

/*
prints out the information about
name,
age,
coutry and role
*/
echo "User: ". $name. "\nAge: ".$age. "\nCountry: ". $country. "\nRole: ". ROLE;
?>
<?php
$name = "Johnnnnn";
var_dump($name);
?>

<?php
define("X", 5);
echo "Value: " . X + 5;
?>