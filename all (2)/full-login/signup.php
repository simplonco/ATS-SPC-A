<?php
   include('session.php');
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
<title>Sign-Up</title>
	  <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body >


<div class="mdl-layout mdl-js-layout">

       <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
       	<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
           <i class="material-icons">more_vert</i>
       </button>

       <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
           for="demo-menu-lower-left">
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "process.php">Employees data</a></li>
         <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent"  href = "signup.php">Registration</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">logout</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Présence App</h2>
      </div>

        <h1 style="color:rgb(60, 142, 200); font-family:verdana; text-align:center;"> Bienvenue <?php echo $login_session; ?></h1>

        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp"  align="center">
           <form method="POST" action="connect.php">
		   <thead>
			<td>Prénom</td><td> <input type="text" name="name"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Nom</td><td> <input type="text" name="lastname"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Email</td><td> <input type="text" name="email"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Nom d'Utililisateur</td><td> <input type="text" name="username"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Mot de passe</td><td> <input type="password" name="pass"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="button" type="submit" name="submit" value="Sign-Up"> Se connecter </button></td>
			</tr>
			</thead>
			</form>
		</table>

      </div>

</body>
</html>
