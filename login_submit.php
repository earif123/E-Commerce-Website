<?php
require 'includes/common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);
$query = "select id, email from users where email='$email'  and password='$password'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
  $message = "Invalid Credentials ! Please try again. ";
  echo "<script> alert('$message');</script>";
  //header('location: login.php?error=Please Enter correct email and password');
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['id'] = $row['id'];
  header('location: products.php');
}
?>

