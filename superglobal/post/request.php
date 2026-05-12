<?php
$product = isset($_POST['product']) ? $_POST['product'] : "No product passed";

$price = (isset($_POST['price'])) ? $_POST['price'] : "No price passed";

$quantity = (isset($_POST['quantity'])) ? $_POST['quantity'] : "No quantity passed";

if (isset($_POST['quantity'])) {

    $quantity = filter_var($_POST['quantity'], FILTER_VALIDATE_INT);
    if ($quantity === false) {

        echo 'quantity is not a valid integer';

    } else {

        $total = $price  * $quantity;


        echo "Product: " . $product . "\nPrice: " . $price . "\nQuantity: " . $quantity . "\nTotal: " . $total;    
    };
        
} else {

    echo 'No quantity passed';
        }
?>