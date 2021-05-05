<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>


<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <h2>Your order is confirmed. Thank you for shopping with us.</h2><br>
        <a href="products.php">Click here</a> to purchase any other item.
    </body>
</html>
