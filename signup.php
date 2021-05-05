<?php
require 'includes/common.php';
if(isset($_SESSION['email'])) {
 header('location: products.php');
}
?>


<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div class="row row_style">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                <h2>SIGN UP</h2>
                <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Contact" name="contact">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  placeholder="City" name="city">
                        </div>
                        <div class="form-group">
                           <input class="form-control"  placeholder="Address" name="address">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>