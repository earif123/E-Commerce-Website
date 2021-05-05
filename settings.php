<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<html>
    <head>
        <title>Settings</title>
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
                <h2>Change Password</h2>
                <form method="post" action="settings-script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="old-password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="new-password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="retype-password">
                        </div>
                        <button type="submit" name="change" class="btn btn-primary">Change</button>
                    </form>
                </div>
        </div>
        
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>