⚡ PROBLEM FIRST — VARIABLES
TASK

Create a PHP script that outputs:

My name is John
I am 25 years old
I live in Nigeria
REQUIREMENTS
Use variables for:
Name
Age
Country
Use ONE echo statement
Use \n for line breaks
CONSTRAINTS
❌ No hardcoding inside echo (except structure text)
❌ No multiple echo statements
❌ No HTML
❌ No extra spaces
EXPECTED OUTPUT (STRICT)
My name is John
I am 25 years old
I live in Nigeria
🧠 THINK BEFORE YOU CODE

Bad approach:

echo "My name is John...";

Correct mindset:

Store → then use




# 🧠 COMPREHENSIVE QUIZ
Answer everything carefully.

---

## 1. Multiple Choice

Which of the following correctly defines a variable in PHP?

A.

```php
name = "John";
```
B.

```php
$name = "John";
```

C.

```php
var name = "John";
```

D.

```php
$name == "John";
```

---

## 2. Code Output Prediction

```php
<?php
$name = "Ada";
echo "Hello $name";
```

What is the output?

Hello Ada

---

## 3. Debug This Code

```php
<?php
$name = John;
echo "My name is $name";
?>
```

* What is wrong?
* Fix it

---

## 4. Fill in the Gap

Complete the code:

```php
<?php
$age = 30;
echo "I am $age years old";
```

---

## 5. Trick Question

What is the output?

```php
<?php
$name = "John";
echo 'Hello $name';
```

Explain WHY.

---

## 6. Short Coding Task

Write code that outputs:

```
User: Alice
Score: 95
```

Constraints:

* Use variables
* One echo
* Use `\n`

---

<?php
echo "User: $User\nScore: $Score"
?>

# 🧩 MINI PROBLEM SET

## Problem 1

Output:

```
Product: Laptop
Price: 500
```

Constraints:

* Use variables
* One echo

---

## Problem 2

Output:

```
X = 10
Y = 20
Sum = 30
```

Constraints:

* Use variables
* Compute the sum (no hardcoding `30`)

---

## Problem 3 (Thinking)

What will this output?

```php
<?php
$name = "John";
$greeting = "Hello $name";
echo $greeting;
```

Explain step-by-step.

---

# 🏗️ PROJECT — USER PROFILE GENERATOR

## TASK

Create a PHP script that outputs:

```
User Profile
------------
Name: David
Age: 28
Country: Ghana
```

---

## REQUIREMENTS

* Use variables for all values
* Use ONE echo
* Use `\n`
* Match formatting EXACTLY (including dashes)

---

## EXPECTED OUTPUT

```
User Profile
------------
Name: David
Age: 28
Country: Ghana
```

---

# ⚙️ CHECKER RULES

Next submission will be checked for:

* Exact output match
* Proper variable usage
* No hardcoding
* Correct computation (if needed)
* Clean syntax

---

# 🧠 REVIEW & DEFENSE (PREPARE)

You will answer:

1. Difference between single and double quotes in PHP
2. Why variables matter instead of hardcoding
3. One mistake you made earlier and how you fixed it

---

Now go.

Submit:

* Quiz answers
* Mini problems
* Project code + output

Stay sharp.


⚡ PROBLEM FIRST
TASK

Create a PHP script that outputs:

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
.

(dot operator for concatenation)

Use ONE echo

🧠 COMPREHENSIVE QUIZ
Answer carefully.

1. Multiple Choice

What does . do in PHP?

A. Adds numbers
B. Joins strings
C. Creates variables
D. Ends a statement

2. Code Output Prediction
<?php
$a = "Hello";
$b = "World";
echo $a . " " . $b;

What is the output?

3. Debug This Code
<?php
$name = "John";
echo "Hello " $name;
What is wrong?
Fix it
4. Fill in the Gap
<?php
$city = "Lagos";
echo "City: " ___ $city;
5. Trick Question

What is the output?

<?php
$x = 5;
echo "Value: " . $x + 5;

Explain WHY.

6. Short Coding Task

Output:

Item: Book
Price: 20

Constraints:

Use variables
Use concatenation only
One echo
🧩 MINI PROBLEM SET
Problem 1

Output:

First: A
Second: B
Third: C

Constraints:

Use variables
One echo
Concatenation only
Problem 2

Output:

Number1 = 10
Number2 = 15
Total = 25

Constraints:

Use variables
Compute total (no hardcoding)
Concatenation only
Problem 3 (Thinking)

What will this output?

<?php
$name = "John";
echo "Hello " . $name . 5;

Explain step-by-step.

🏗️ PROJECT — RECEIPT GENERATOR
TASK

Create a PHP script that outputs:

Receipt
-------
Item: Phone
Price: 300
Quantity: 2
Total: 600
REQUIREMENTS
Use variables for all values
Compute total (price * quantity)
Use concatenation (.)
One echo
Use \n
EXPECTED OUTPUT
Receipt
-------
Item: Phone
Price: 300
Quantity: 2
Total: 600


⚙️ CHECKER RULES
Exact output match
Correct concatenation usage
No interpolation
Proper calculation
Clean syntax
🧠 REVIEW & DEFENSE (NEXT)

Be ready to answer:

Why concatenation is safer in some cases than interpolation
What bug can happen when mixing . and +
One mistake you avoided this time

Now go.

Submit everything—clean and complete.




COMPREHENSIVE QUIZ
1. Multiple Choice

Which of the following defines a constant correctly?

A.

$ROLE = "Admin";

B.

define("ROLE", "Admin");

C.

const role = "Admin";

D.

ROLE = "Admin";
2. Code Output Prediction
<?php
$name = "John";
var_dump($name);

What is the output?

3. Debug This Code
<?php
define("AGE", 25);
echo "Age: " . age;
What is wrong?
Fix it
4. Fill in the Gap
<?php
$value = 10;
___($value);

(Use the correct function to inspect the variable)

5. Trick Question

What happens here?

<?php
define("X", 5);
echo "Value: " . X + 5;

Explain the output.

6. Short Coding Task

Write code that:

Defines a constant SITE = "MyApp"
Stores a variable $version = 1
Outputs:
App: MyApp
Version: 1

Constraints:

One echo
Use concatenation
🧩 MINI PROBLEM SET
Problem 1

Output:

Status: Active

Constraints:

Use a constant STATUS
One echo
Problem 2

Output:

Debugging...
Done

Constraints:

Use var_dump() on a variable
Ensure it does NOT appear in output
Problem 3 (Thinking)

What will this output?

<?php
$age = 25;
echo "Age: " . $age;
var_dump($age);

Explain the order and why.

🏗️ PROJECT — CONFIGURATION LOGGER
TASK

Create a script that:

Defines constants:
APP_NAME = "Tracker"
ENV = "development"
Uses variables:
$user = "Alice"
$id = 101
Uses var_dump() to inspect $id
BUT does NOT show it in final output
OUTPUT (STRICT)
App: Tracker
Environment: development
User: Alice
ID: 101
CONSTRAINTS
One echo
Use concatenation
Use output buffering for var_dump
No extra output
Exact formatting
⚙️ CHECKER RULES
Exact match required
Constants must be used (not variables)
var_dump() must not leak
Clean syntax
🧠 REVIEW & DEFENSE (NEXT)

Prepare to answer:

Why output buffering is important
Difference between constants and variables
One mistake you fixed in this task

Now go.

Submit:

Quiz answers
Mini problems
Project code + output