<head>
	<link rel="stylesheet" type="text/css" href="../css/autentificare.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!-- <script type="text/javascript" src="../js/register.js"></script> -->
</head>

<body>

<h1 style="text-decoration: none">Inregistreaza-te</h1>
<div class="container">
      <div class="register register-container">
      <img id="profile-img" class="profile-img-user" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-user"></p>
             <form class="form-signin" action="verify_login.php" method="POST" >
                             <input type="text" name="nume_utilizator" id="inputUsername" class="form-control" placeholder="Nume utilizator" required autofocus>
                             <input type="password" id="inputPassword" name="parola" class="form-control" placeholder="Parola" required>
                             <button class="btn btn-default sarah-register-button" type="submit">Intra in cont</button>
            </form>
    </div>
    <div class=" gotoregister">
        <p>Nu ai un cont? Apasa <a href="register.php" ><span style="color: darkblue; text-decoration: underline;">aici</span></a> pentru a creea unul</p>
    </div>
    <br>
    <br>

</body>
