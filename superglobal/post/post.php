<?php
echo $_GET['name'];
echo $_GET['age'];
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=7">Click</a>