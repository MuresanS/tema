<head>
	<link rel="stylesheet" type="text/css" href="../css/autentificare.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- <script type="text/javascript" src="../js/register.js"></script>

    <script type="text/javascript" src="../js/submit_redirect_register.js"></script>
 -->
</head>
<body>
<div class="container">
    <div class="register register-container">
      <h1 style="text-decoration: none; color: #fff;">Creaza cont</h1>
      <img id="profile-img" class="profile-img-user" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
      <p id="profile-name" class="profile-name-user"></p>
      <form class="form-signin" action="insereaza.php" method="POST" >
        <span id="reauth-email" class="reauth-email"></span>
        <input type="text" name="nume_utilizator" id="inputUsername" class="form-control" placeholder="Nume utilizator" required autofocus>
        <input type="text" name="nume" id="inputNume" class="form-control" placeholder="Nume" required autofocus>
        <input type="text" name="prenume" id="inputPrenume" class="form-control" placeholder="Prenume" required autofocus>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresa email" required autofocus>
        <input type="password" id="inputPassword" name="parola" class="form-control" placeholder="Parola" required>

        <button class="btn btn-default sarah-register-button" type="submit">Creaza cont</button>
      </form><!-- /form -->
    </div>
</div>


</body>
