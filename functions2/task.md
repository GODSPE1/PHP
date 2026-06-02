TASK — BUILD A STUDENT RESULT PROCESSOR

Create a PHP script that defines and uses functions to process student scores.

REQUIRED FUNCTIONS

You MUST create ALL of these functions.

1. calculateAverage()
Requirements
Accept ANY NUMBER of scores
Use a variadic parameter
Return the average as float
Example
calculateAverage(10, 20, 30)

returns:

20
2. determineGrade()
Requirements

Accept average score and return:

Score Range	Grade
70+	A
60–69	B
50–59	C
40–49	D
Below 40	F
3. incrementAttempt()
Requirements
Track how many times grading was done
Use a static variable
Return current attempt count
4. updateBonusScore()
Requirements
Accept score BY REFERENCE
Add 5 bonus marks directly to original variable
5. buildReport()
Requirements

Must use:

typed parameters
typed return value
default parameter:
$status = "ACTIVE"

Return formatted report string.

STRICT REQUIREMENTS

You MUST also use:

declare(strict_types=1);
named arguments (at least once)
local scope correctly
global scope correctly
ONE echo only in main execution
concatenation only
NO hardcoded final report
REQUIRED OUTPUT FORMAT
Student Report
--------------
Name: John
Average: 75
Grade: A
Status: ACTIVE
Attempts: 1
Bonus Applied Score: 85
CONSTRAINTS
❌ No loops
❌ No arrays
❌ No multiple echo
❌ No interpolation
❌ No global variables unless intentionally required
❌ No hardcoded output
✅ Functions must return values properly
✅ Must demonstrate:
variadic functions
pass-by-reference
static variable
type hints
strict typing
named arguments
⚠️ HIDDEN DIFFICULTIES
strict typing can crash wrong types
variadic average division edge cases
static variables persist across calls
pass-by-reference mutates original data
named arguments require correct parameter names