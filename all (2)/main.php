<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	  <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
.demo-layout-transparent {
  background: url('accentur.jpg') center / cover;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}
</style>
</head>
<body>
	<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Accenture Présence App</span>
			<!--<h3 style="color:white; margin-top:110px;"> Bienvenue sur la page d'accueil</h3><br>-->
				<h3 style="color:white; margin-top:120px;"> Bienvenue sur la page de suivi de présence</h3><br>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="full-login/index.php">Administrateurs</a>
        <a class="mdl-navigation__link" href="employees/index.php">Employées</a>
      </nav>
    </div>
  </header>
</div>
</body>
</html>
