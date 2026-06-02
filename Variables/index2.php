/*
This script is used to ask for user input in the cli

$name = readline("Enter Your name: "); // This ask for your name 
$age = readline("Enter Your age: ");
$country = readline("Enter Your country: "); # ask for your country
echo "Hello ". $name ."\nYou are " .$age. " years old\n". "You live in " .$country;
?>

<!--  -->
//get 3 commands from user
for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}

//dump history
print_r(readline_list_history());

//dump variables
print_r(readline_info());
?>
*/
<?php
$a = array(1, 2, "a");
var_dump($a);

 ?>


1 B. define("ROLE", "Admin");
2<?php
$name = "John";
var_dump($name); // string(4) "John"
?>
3.
<?php
define("AGE", 25);
echo "Age: " . AGE; 
 // age is not calling the right constant variable
?>
4. <?php
$value = 10;
echo "\n"."($value)";
?>


<?php
define("X", 5);
echo "Value: " . X + 5; // Value: 10
?> 
// the constant is seen as an integer and the plus not concatinating but adding the two integers

<?php
const SITE = "MyApp";
$version = 1;
echo SITE."\nVersion: ". $version;
?>

<?php
const  Status = "Active";
echo Status;
?>


<?php
const  DEBUG = "Debugging...";
ob_start();
var_dump(DEBUG);
ob_end_clean();
echo DEBUG."\nDone";
?>

<?php
$age = 25;
echo "Age: " . $age;
var_dump($age);//<?php
$age = 25;
echo "Age: " . $age;
var_dump($age);
// it will print the value and  data type of the varable followed by the value of it
?>



<?php
const APP_NAME = "Tracker";
const ENV = "development";
$user = "Alice";
$id = 101;
ob_start();
var_dump($id);
ob_end_clean();
echo "App: ". APP_NAME. "\nEnvironment: ". ENV. "\nUser: ". $user. "\nID: ". $id;
?>