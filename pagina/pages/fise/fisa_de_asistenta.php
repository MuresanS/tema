<head>
	<link rel="stylesheet" type="text/css" href="../../css/autentificare.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- <script type="text/javascript" src="../js/register.js"></script>

    <script type="text/javascript" src="../js/submit_redirect_register.js"></script>
 -->
</head>
<body class="fisa-de-asistenta-body" style="color: #fff;">
<div  style="text-align: center; margin-top:50px">
  <h1 style="text-decoration: none">Fisa de asistenta</h1>
  <h3>Pentru Practica Observationala</h3>
</div>

<div class="" style="margin-top: 20px;margin-left: 20px;margin-right: 20px">
        <div>
            <form class="fisa" action="adauga_fisa_asistenta_1.php" method="POST" >
              <label>Institutia de invatamant</label>
                <input type="text" name="institutie" id="institutie" class="form-control" required autofocus>
              <label>Data</label>
                  <input type="date" name="data" id="data" class="form-control" required autofocus>
              <label>Ora</label>
                  <input type="text" name="ora" id="ora" class="form-control" required autofocus>
              <label>Clasa</label>
                  <input type="text" name="clasa" id="clasa" class="form-control" required autofocus>
              <label>Obiectul de invatamant</label>
                  <input type="text" name="obiect_invatamant" id="obiect_invatamant" class="form-control" required autofocus>
              <label>Tema lectiei</label>
                  <input type="text" name="tema_lectiei" id="tema_lectiei" class="form-control" required autofocus>
              <label>Tipul lectiei</label>
                  <input type="text" name="tipul_lectiei" id="tipul_lectiei" class="form-control" required autofocus>
              <label>Obiective operationale</label>
                  <input type="text" name="obiective_operationale" id="obiective_operationale" class="form-control" required autofocus>
              <label>Strategia didactica</label>
                  <input type="text" name="strategia_didactice" id="strategia_didactice" class="form-control" required autofocus>
              <label>Metode</label>
                  <input type="text" name="metode" id="metode" class="form-control" required autofocus>
              <label>Mijloace</label>
                  <input type="text" name="mijloace" id="mijloace" class="form-control" required autofocus>
              <label>Forme de organizare</label>
                  <input type="text" name="forma_organizare" id="forma_organizare" class="form-control" required autofocus>
              <label>Metode de evaluare</label>
                  <input type="text" name="metode_evaloare" id="metode_evaloare" class="form-control" required autofocus>
                  <br>
                <button class="btn btn-default sarah-register-button" type="submit">Adauga fisa</button>
                <br>
                <br>
            </form><!-- /form -->


        </div>
</div>

<!--  -->
<form method="POST" action="adauga_fisa_asistenta_2.php">

<!-- <table> -->

<div class="container">
    <form action="adauga_fisa_asistenta_2.php" method="POST">
      <table class="table">
        <thead>
          <tr>
            <th>Etapele activitatii</th>
            <th>Obiectivele operationale</th>
            <th>Continutul activatii</th>
            <th>Observatii</th>
          </tr>
        </thead>
          <tr>
            <!--        -->

            <td><input type="text" name="etapele_activitatii" id="etapele_activitatii" class="form-control" required autofocus size="35"></td>
            <td><input type="text" name="obiective_operationale" id="obiective_operationale" class="form-control" required autofocus ></td>
            <td><input type="text" name="continutul_activitatii" id="continutul_activitatii" class="form-control" required autofocus ></td>
            <td><input type="text" name="observatii" id="observatii" class="form-control" required autofocus ></td>
          </tr>
        </table>
        <input type="submit" value="Adauga" class="btn btn-default sarah-register-button">
  </form>
</div>
</body>
</html>
