<?php
$name = "John"; $age = 25; $country = "Nigeria";
 echo "My name is $name\nI am $age years old\nI live in $country";
?>

1. A
2. Hello Ada
3. No closing of syntax tag ?>
4. 
<?php
$age = 30;
echo "I am $age years old";
?>
5. 
<?php
$name = "John";
echo 'Hello $name';
?>
// echo give hello with the varable value John as double quote allows interpolation


6. 
<?php
$user = "Alice"; $score = 95;
echo "User: $user\nScore: $score"
?>


<?php
$product = "Laptop"; $price = 50;
echo "Product: $product\nPrice: $price";
?>

<?php
$X = 10; $Y = 20; $Sum;
$Sum = $X + $Y;
echo "Sum = $Sum";
?>

<?php
$X = 10; $Y = 20; $Sum;
echo "Sum = ", ($X + $Y);
?>

<?php
$name = "John";
$greeting = "Hello $name";
echo $greeting;
?>




<?php
$header = "User Profile";
$breaker = "------------";
$name = "David";
$age = 28;
$country = "Ghana";
echo "$header\n$breaker\nName: $name\nAge: $age\nCountry: $country";
?>

// Using double quotes
<?php
$x = "John";
echo "Hello $x\n";
echo "\tHow are you?\n";
?>


// Using single quotes
<?php
$x = 'John';
echo 'Hello $x\n';
echo '\tHow are you?\n';
?>




My name is John
I am 25 years old
I live in Nigeria


REQUIREMENTS
Use variables:
$name
$age
$country
❗ You are NOT allowed to use variable interpolation
(This means NO "Hello $name")
You MUST use:


<?php
$name = "John";
$age = 25;
$country = "Nigeria";
echo "My name is ".$name. "\nI am ".$age." years old\nI live in ".$country;
?>


B. Joins strings
Hello World
<?php
$name = "John";
echo "Hello " .$name;
?>
// there was no concatenation

<?php
$x = 5;
echo "Value: " . $x + 5;
?>

<?php
$city = "Lagos";
echo "City: " .$city;
?>

<?php
$a = "Hello";
$b = "World";
echo $a . " " . $b;
?>


<?php
$item = "Book";
$price = 20;

echo "Item: " . $item . "\nPrice: " .$price
?>


<?php
$first = 'A';
$second = 'B';
$third = 'C';
echo "First: " .$first. "\nSecond: " .$second. "\nThird: " .$third;
 ?>


<?php 
$number1 = 10;
$number2 = 15;
$Total = 0;
echo "Number1 = " .$number1 . "\nNumber2 = ".$number2."\nTotal = ". ($number1 + $number2);
 ?>


<?php
$name = "John";
echo "Hello " . $name . 5;
?>
// this will print Hello John5 using the concatnation for string 


<?php
$header = "Receipt";
$line = "-------";
$item = "Phone";
$price = 300;
$quantity = 2;
echo $header. "\n". $line. "\nItem: " .$item. "\nPrice: ". $price. "\nQuantity: ". $quantity. "\nTotal: ". ($price * $quantity);
?>