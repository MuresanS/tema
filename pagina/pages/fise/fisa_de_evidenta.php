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
   <body style="color: #fff;">
   <div  style="text-align: center; margin-top:50px">
     <h1 style="text-decoration: none">Fisa de evidenta</h1>
     <h3>Pentru Practica Observationala</h3>
   </div>

   <div class="" style="margin-top: 20px;margin-left: 20px;margin-right: 20px">
           <div>
               <form class="fisa" action="adauga_fisa_de_evidenta.php" method="POST" >
                 <label>Institutia de invatamant</label>
                   <input type="text" name="institutie" id="institutie" class="form-control" required autofocus>
                 <label>Clasa</label>
                   <input type="text" name="clasa" id="clasa" class="form-control" required autofocus>
                 <label>Data</label>
                   <input type="date" name="data" id="data" class="form-control" required autofocus>
                 <label>Ora</label>
                   <input type="text" name="ora" id="ora" class="form-control" required autofocus>
                 <label>Disciplina</label>
                   <input type="text" name="disciplina" id="disciplina" class="form-control" required autofocus>
                 <label>Tema lectiei</label>
                   <input type="text" name="tema_lectie" id="tema_lectie" class="form-control" required autofocus>
                 <label>Mentor</label>
                   <input type="text" name="mentor" id="mentor" class="form-control" required autofocus>
                   <br>
                 <input type="submit" value="Adauga" class="btn btn-default sarah-register-button" >
                 <br>
                 <br>
             </form>
          </div>
   </div>
 </body>
 </html>
