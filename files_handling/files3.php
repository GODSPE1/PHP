<?php
$filename = __DIR__ . '/users.txt';

if (file_exists($filename)) {
    $message = 'File exists';
    } else {
        $message = 'File does not exists';
    } 
    // echo nl2br($message);

?>
<?php

if (is_file($filename)) {
    $message = 'It is a file';
    } else {
        $message = 'It is not a file';
    } 
    
    
    if (is_readable($filename)) {
        $message = 'File is readble';
        } else {
        $message = 'File is not readble';

        }
        if (is_writable($filename)) {
            $message = 'File is writable';
            } else {
            $message = 'File is not writable';
    
            }
            
            echo $message;


$html = file_get_contents();

?>