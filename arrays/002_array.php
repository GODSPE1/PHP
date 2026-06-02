<?php
    $fruits = array("Orange", "Apple", "mango", "pear", "banana");

    //get length
    // echo count($fruits);

    // search

    // var_export(in_array('ApPle', $fruits)); // False
    // var_export(in_array('Apple', $fruits)); // true

    // add to array
    $fruits[] = 'grapes';
    array_push($fruits, 'blueberry', 'strawberry');
    array_unshift($fruits, 'Guava');


    // remove from array
    array_pop($fruits);
    array_pop($fruits);
    unset($fruits[1]);

    //split into chunks
    $chunked_array = array_chunk($fruits, 2);


    print_r($chunked_array);
    // var_dump($fruits);
