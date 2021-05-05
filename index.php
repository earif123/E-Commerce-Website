<?php
require 'includes/common.php';
?>
<?php>
if(isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div id="banner-image">
            <div class="container">
                <div id="banner_content">
                    <a href="products.php"  class ="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>
