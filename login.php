<?php
require 'includes/common.php';
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
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make purchase</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                          
                                </div>
                                <button type="submit" name="login" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>


