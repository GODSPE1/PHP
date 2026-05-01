
<?php
define("ROLE", 'admin');


$num = 4;

if($num >= 3) {
    echo "Yes";
} else {
    echo "Sorry is not";
}
$message = 'Sorry! You are not authorized to access this page';


$age = 45;
$post = [];

if($age >= 18) {
    echo "<>You're eligible to vote";
    } else {

        echo "You're not eligible to vote";
    }

$check = $age >18 ? "You're eligible to vote" : "You're not eligible to vote";
echo "$check";
$first_post = !empty($post) ? $post[0] : "The post is empty";
echo $first_post;


    $time = date("G");
    $time_c = date("r");
    $time_r = date("c");

    if($time < 12) {
        echo "Good morning";
    } elseif($time < 18) {
        echo "Good afternoon";
    }elseif($time >= 18) {
        // echo "Good evening";
    }
    var_dump($time_r);
    echo $time_r
?>



<?php

$eligible = false;
$has_credit = true;

$message = $eligible
			? ($has_credit
					? 'Can use the credit'
					: 'Not enough credit')
			: 'Not eligible to buy';

// echo $message;
?>

<?php

// $role = '';
$message = '';

if ('admin' === ROLE) {
    $message = "Welcome,  IF admin";
    } elseif ('editor' === ROLE) {
        $message = 'Welcome! Do you want to publish the draft article?';
    } elseif ('suscriber' === ROLE) {
        $message = 'Welcome! Check out some new articles.';
    } else {
        $message = 'Sorry! You are not authorized to access this page';
    }


    echo "$message <br><br>";
?>


<?php

// $role = 'admin';
$message = '';

switch (ROLE) {
    case "admin":
        $message = "Welcome, \"SWITCH\" admin";
        break;

    case 'editor':
        $message = 'Welcome! Do you want to publish the draft article?';
        break;
    case 'suscriber':
        $message = 'Welcome! Check out some new articles.';
        break;
    default:
        $message = 'Sorry! You are not authorized to access this page';

}

$str = "This is PHP";

echo "$message<br><br>";
echo $str[0];
?>