<?php
$username = isset($_GET['username']) ? $_GET['username'] : 'Guest';
$password = (isset($_GET['password'])) ? filter_var($_GET['password'], FILTER_VALIDATE_INT)  : 'Incorrect input'; 
$result = (($username === 'admin') && ($password === 1234)) ? "Access granted" : "Access denied";

echo $result; 
?>