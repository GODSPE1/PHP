
<?php
$file = __DIR__ ."/du.txt";

 if (file_exists($file)) {
    fopen($file, 'r');
    echo "File openend succesfully! ";
    fclose($file);

 } else {
    echo ('Failed to open file.');
 }
?>

<?php
function read_file($file) {
    
    if (!is_file($file)) {
        echo "Failed to open file.";
        } 
        $handle = fopen($file, 'r');

        $content = fread($handle, filesize($file));

        fclose($handle);
        
        echo $content;
}
?>
<?php
function read_file_ln_by_ln($content) {
    $file = fopen($content, 'r');

    if (!$file) {
        die('Failed to open file.');
    } else {
        while(($line = fgets($file)) !== false) {
            echo $line. '<br>';
        }
        fclose($file);
    }
}

function write_file($file, $text) {
    $handle = fopen($file, 'a');

    if (!$handle) {
        return false;
        }
        
        fwrite($handle, $text);
        
        fclose($handle);
    
        }
        
        
    $file = 'users.txt';

    $text = 'GP' . PHP_EOL;
    write_file($file, $text);
    read_file($file);
    read_file_ln_by_ln($file);

?>
