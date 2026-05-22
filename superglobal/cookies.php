<?php
setcookie('name', 'Brad', time() + 864600 * 30);
setcookie('age', '40', time() + 864600 * 30);

if(isset($_COOKIE['name, age'])) {
    echo  $_COOKIE['name']. " = " . $_COOKIE['age'];
}
?>