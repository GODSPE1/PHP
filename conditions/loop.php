<?php
define("NUM", 20);


// var_dump($number);
//1
for ($i = 1; $i <= 12; $i++) {
    echo "1 X $i = $i<br>";
    }
    
    //2
    for ($i = 1; $i <= 12; $i++) {
        echo "2 X $i = ". ($i*2)."<br>";
        }
        
        //3
        for ($i = 1; $i <= 10; $i++) {
            echo "3 X $i = ". ($i*3)."<br>";
            
            }
            
//4
for ($i = 1; $i <= 10; $i++) {
    echo "4 X $i = ". ($i*4)."<br>";
    
}

//5
for ($i = 1; $i <= 10; $i++) {
    echo "5 X $i = ". ($i*5)."<br>";
    
    }
    
    // for loop in array
$number = ['one', 'two', 'three', 'four', 'five'];
for($x = 0; $x < count($number); $x++) {
    echo $number[$x] .'<br>';
}

// while loop
$total = 0;
$i = 0;

while($i < NUM) {
    $total += NUM;
    $i++;
}
echo $total;


//do while loop
$x = 6;

do {
    echo 'Number '. $x . '<br>';
    $x++;
 } while($x <= 5);


 //Foreach loops
 $posts = ['First Post', 'Second Post', 'Third Post'];
 for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x] . '<br>';
    }

foreach($posts as $post) {
    echo $post . '<br>';
}

foreach($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . '<br>';
}

$colour = [
    "blue" => '#00f',
    "white" => '#fff',
    "green" => '#0f0',
    "yellow" => '#ff0',
    "red" => '#f00'
];


foreach($colour as $key => $value) {
    echo "$key => $value" . '  <br>';
    }  
?>