<?php 
if (isset($_POST['email'])) {
    var_dump($_POST['email']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    echo $email;
}
?>


