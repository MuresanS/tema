<?php
include 'config.php';
 ?>

 <?php
$username=$_POST['nume_utilizator'];
$first_name=$_POST['nume'];
$last_name=$_POST['prenume'];
$email=$_POST['email'];
$password=$_POST['parola'];

$sql="INSERT INTO users (`username`, `first_name`, `last_name`, `email`, `password`) VALUES (
  '".$username."',
  '".$first_name."',
  '".$last_name."',
  '".$email."',
  '".$password."')";

if ($database->query($sql) === true) {
  header('location: ./login.php');
} else {
  header('location: ./register.php');
}
  ?>
