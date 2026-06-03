<?php

if (file_exists('uers.txt')) {
    echo "File exists! ";
    $file = fopen('uers.txt', 'a');
} else {
    echo "File does not exist! ";
    die();
}

if ($file) {
    echo "File opened successfully! ";
    
    fwrite($file, 'John' . PHP_EOL);
    fwrite($file, 'Hope' . PHP_EOL);
    fwrite($file, 'Stephen' . PHP_EOL);
    fwrite($file, 'Lambert' . PHP_EOL);
    
    fclose($file);

    $file = fopen('users.txt', 'r');
    $content = fread($file, filesize('users.txt'));
    
    echo nl2br($content);
    
    fclose($file);
    
    } else {
        echo ('Failed to open file.');
    }
    
?>