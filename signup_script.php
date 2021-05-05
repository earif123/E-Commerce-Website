<?php
require 'includes/common.php';

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  $message = "Enter correct email";
  echo "<script> alert('$message');</script>";
  //header('location: signup.php?email_error=enter correct email');
}
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
if (strlen($password) < 6) {
  $message = "Password length should be greater than 5";
  echo "<script> alert('$message');</script>";
  //header('location: signup.php?password_error=password length should be greater than 5');
}
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$contact = $_POST['contact'];
if (strlen($contact) < 10 || strlen($contact) > 10) {
  $message = "Enter correct contact no.";
  echo "<script> alert('$message');</script>";
  //header('location: signup.php?contact_error=enter correct contact no.');
}
$contact = mysqli_real_escape_string($con, $contact);

$city = $_POST['city'];
$city = mysqli_real_escape_string($con, $city);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con, $address);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num > 0) {
    $message = "Email Already Exists";
    echo "<script> alert('$message');</script>";
    //header('location: signup.php?error = Email Already Exists');
  }
else {
    $query = "insert into users(name, email, password, contact, city, address) values ('$name','$email','$password','$contact','$city','$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $user_id;
    header('location: products.php');
  }
?>




