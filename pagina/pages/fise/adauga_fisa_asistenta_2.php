<?php
include ('../config.php');
 ?>

 <?php
   $etapele_activitatii=$_POST['etapele_activitatii'];
   $obiective_operationale=$_POST['obiective_operationale'];
   $continutul_activitatii=$_POST['continutul_activitatii'];
   $observatii=$_POST['observatii'];
   $sql="INSERT INTO adauga_fisa_asistenta2 (`etapele_activitatii`, `obiective_operationale`, `continutul_activitatii`, `observatii`) VALUES (
     '".$etapele_activitatii."',
     '".$obiective_operationale."',
     '".$continutul_activitatii."',
     '".$observatii."')";

    if ($database->query($sql) === true) {
      header('location: ../index.php');
    } else {
      header('location: ./fisa_de_asistenta.php');
     }
   ?>
