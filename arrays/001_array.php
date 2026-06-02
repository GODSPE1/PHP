<?php
    $numbers = [71, 44, 53, 14];
    echo $numbers[1] . "<br>";
    $fruits = array("Orange", "Apple", "mango", "pear", "banana");
    array_unshift($numbers, 30);

    echo count($fruits) .  "<br>";
    print_r($numbers) . "<br><br>";
    var_export($numbers). "<br>";
    var_dump($numbers);
    echo $fruits[1] . "<br>";
    echo array_search("banana", $fruits) ."<br>";
    // echo $yes;
    
    //associative array
    $numeral = [
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        "Four" => 4,
        ];
        
        
        // echo $numeral[2];
        
            $colours = [
                'blue' => '#00f',
                "green" => '#0f0',
                'white' => '#fff',
                'red' => '#fff',
                ];
            
            $str = "yes";
            echo $colours['red'] . "<br>";
            echo $numeral[2] . "<br>";
            var_export($numeral) . "<br>";
            var_dump($numeral);
    echo "<br>" . $str;
    

    echo count($numeral);
    print_r(array_count_values($numeral));

    $fruits = array("apple", "banana", "apple", "orange", "banana", "apple", 'pear', 'pear', 'pear', 'pear');
    print_r(array_count_values($fruits));


    $array1 = [1, 20, 3];
    $array2 = [4, 5, 86];
    $merged = array_merge($array1, $array2);
    print_r($merged);  // Outputs: [1, 2, 3, 4, 5, 6]

    // sort($numeral);
    print_r($numeral);
?>