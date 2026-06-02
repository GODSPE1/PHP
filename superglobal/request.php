
<?php
    // $product = isset($_GET['product']) ? $_GET['product'] : "No product passed";
    // $price = (isset($_GET['price'])) ? $_GET['price'] : "No price passed";
    // var_dump($price);
    // echo "Product: " . $product . "\nPrice: " . $price;
    $product = isset($_GET['product']) ? $_GET['product'] : "No product passed";
    $price = (isset($_GET['price'])) ? $_GET['price'] : "No price passed";
    var_dump($product);
    var_dump($price);
    if (isset($_GET['quantity'])) {
        $quantity = filter_var($_GET['quantity'], FILTER_VALIDATE_INT);
        if ($quantity === false) {
                echo 'quantity is not a valid integer';
                } else {
                $Total = ($price * 2) * $quantity;
                echo "Total: " . $Total;    
            };
            
    } else {
        echo 'No quantity passed';
}
// var_dump($price);
?>