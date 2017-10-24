<?php
include ('config.php');
session_start();
?>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST")  {
   $username = mysqli_real_escape_string($database,$_POST['nume_utilizator']);
  $password = mysqli_real_escape_string($database,$_POST['parola']);

   $sql="SELECT id FROM users WHERE username = '$username' and password = '$password' ";
   $result=mysqli_query($database,$sql);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

   $count=mysqli_num_rows($result);

   if( $count ==1 ){
    header('location: ./index.php');
   } else{
     header('location: ./register.php');
   }
 }
 ?>
