<?php
echo "PHP\nis\nfun";;
?>

<?php 
echo "First Line\nSecond Line\nThird Line";
?>


<?php
$Name = "John"; $Age = 25; $Country = "Nigeria";
echo "Name: $Name\n Age: $Age\n Country: $Country"
?>cho "PHP\nis\nfun";

<!-- problem 3  -->
<?php
echo "Hello\n";
echo "World";
?>

// this will give the output "Hello" then on a new line World" this is because the new line is applied here and it works is CLI not withstanding the os


<?php
 echo "Welcome to PHP\nYour system is ready\nLet's build something great";
 ?>


1. Why is \n better than <br> here?

Don’t say “because CLI”. Go deeper.
The new line takes the cursor to the next line and output the text after it, the \n is better as <br> is treated as it works for console, when sending text or email, it is easier to convert the \n using nl2br to convert when rendering in browser html 

2. Why was your FIRST solution wrong?

Be specific about:

nl2br is a function and is mostly used when rendring in the browser
hidden HTML behavior. the \n is bettter with the above reason 
3. What mistake are you repeating?

Hint:
You made the same category of mistake twice. not following intructions, missing closing semi-colon