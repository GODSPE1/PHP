<?php
include 'partials/header.php';
include_once 'functions.php';
require 'config.php';
require_once 'user.php';


echo "Name: " . name($field) . "\n" . "Role: " . $role . "\n" . "Status: " . $status . "\n";


include 'partials/footer.php';

// $data = 'Testing duplicate';
// echo $data;
// dd($data);

// $file = 'udddd.txt';

// if ($file === false) {
//     die('Unable to open file.');
// }

// if(file_exists($file)) {
//     // echo readfile($file);
//     $handle =fopen($file, 'r');
//     $content = fread($handle, filesize($file));
//     fclose($handle);
//     echo $content;
// } else {
//     $handle = fopen($file, 'w');
//     $contents = 'John' . PHP_EOL . 'Hope' . PHP_EOL . 'Steve' . PHP_EOL . 'Lucky' . PHP_EOL . 'Hart';
//     fwrite($handle, $contents);
//     fclose($handle);
// }


?>