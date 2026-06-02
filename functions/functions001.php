<?php
function welcome() {
    echo "Welcome";
};

welcome();
?>

<?php
function welcome_user(string $username)
{
	echo 'Welcome ' . $username;
}

welcome_user('Perky');

// division function
function divide(int $num1, int $num2): int{
    if ($num2 === 0) {
        throw new Exception("Cannot divide by zero");
    }
    return ($num1 / $num2);

};
// multiplication function
function multiply(int $num1, int $num2): int {
       return ($num1 * $num2);
};

// addtion function
function addition(int $num1 = 0, int $num2 = 0): int {
    echo ($num1 + $num2);
};

//subtraction function
function subtraction(int $num1 = 0, int $num2 = 0): int {
    if($num1 === null || $num2 === null)
        {
            return 'Mising values';
        } 

    if(!is_int($num1) || !is_int($num2))
        {
            return 'Both values must be numbers';
        } 

    return ($num1 - $num2);
};
?>

<?php
$sign = readline("Which mathematical operation do you want to do, show with sign");
(int)$x = readline("Input first integer to the mathematical operation");
(int)$y = readline("Input second integer to the mathematical operation");

try {
    switch ($sign)
    {
        case('+'):
        $result = addition($x, $y);
            break;
        case('-'):
            $result = subtraction($x, $y);
            break;
        case('/'):
            $result = divide($x, $y);
            break;
        case('*'):
            $result = multiply($x, $y);
            break;
        default:
        throw new Exception('Invalid operator');
        }

    echo "Results: " . $result;

 } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    }
?>

<?php
function subtraction_prd(int $num1, int $num2): int {
    return $num1 - $num2;
}

try {
    echo subtraction_prd(10, 5);
} catch (TypeError $e) {
    echo "Invalid input: " . $e->getMessage();
}

function subtraction_prd1($num1, $num2): int {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Both values must be numbers");
    }

    return (int)$num1 - (int)$num2;
}
?>