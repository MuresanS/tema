<?php
  include ('../config.php');
 ?>
<?php
  $institutie=$_POST['institutie'];
  $data=$_POST['data'];
  $ora=$_POST['ora'];
  $clasa=$_POST['clasa'];
  $obiect_invatamant=$_POST['obiect_invatamant'];
  $tema = $_POST['tema_lectiei'];
  $tipul_lectiei = $_POST['tipul_lectiei'];
  $obiective_operationale = $_POST['obiective_operationale'];
  $strategia_didactica = $_POST['strategia_didactice'];
  $metode = $_POST['metode'];
  $mijloace = $_POST['mijloace'];
  $forme_organizare = $_POST['forma_organizare'];
  $metode_evaloare = $_POST['metode_evaloare'];
  $sql="INSERT INTO fisa_de_asistenta1 (`institutie`, `data`, `ora` , `clasa`, `obiect`, `tema`,`tip`,`obiective`,`strategie`,`metode`,`mijloace`,`forme`,`metode_evaloare`) VALUES (
    '".$institutie."',
    '".$data."',
    '".$ora."',
    '".$clasa."',
    '".$obiect_invatamant."',
    '".$tema."',
    '".$tipul_lectiei."',
    '".$obiective_operationale."',
    '".$strategia_didactica."',
    '".$metode."',
    '".$mijloace."',
    '".$forme_organizare."',
    '".$metode_evaloare."')";

  if ($database->query($sql) === true) {
    header('location: ../index.php');
  } else {
    header('location: ./fisa_de_asistenta.php');
  }
?>
