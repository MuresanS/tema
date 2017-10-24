<?php
include ('../config.php');
 ?>

 <?php
   $institutie=$_POST['institutie'];
   $clasa=$_POST['clasa'];
   $data=$_POST['data'];
   $ora=$_POST['ora'];
   $disciplina=$_POST['disciplina'];
   $tema_lectie=$_POST['tema_lectie'];
   $mentor=$_POST['mentor'];
   $sql="INSERT INTO fisa_de_evidenta (`institutie`, `clasa`, `data`, `ora`, `disciplina`, `tema_lectie`, `mentor`) VALUES (
     '".$institutie."',
     '".$clasa."',
     '".$data."',
     '".$ora."',
     '".$disciplina."',
     '".$tema_lectie."',
     '".$mentor."')";

    if ($database->query($sql) === true) {
      header('location: ../index.php');
    } else {
      header('location: ./fisa_de_evidenta.php');
     }
   ?>
