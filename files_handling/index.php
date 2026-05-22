<?php
$file = 'udddd.txt';

if(file_exists($file)) {
    // echo readfile($file);
    $handle =fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
} else {
    $handle = fopen($file, 'w');
    $contents = 'John' . PHP_EOL . 'Hope' . PHP_EOL . 'Steve' . PHP_EOL . 'Lucky' . PHP_EOL . 'Hart';
    fwrite($handle, $contents);
    fclose($handle);
}
?>