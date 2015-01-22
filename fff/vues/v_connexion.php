
<!DOCTYPE html>

    <link rel="stylesheet" href="css/style2.css" media="screen" type="text/css" />

</head>

<body>

  <span href="#" class="button" id="toggle-login">Connection</span>

<div id="login">
  <div id="triangle"></div>

  <h1>Connection</h1>

  <form method="POST" action="index.php?uc=GestionAdmin&action=connexion">
            <label for="login">Login : </label>
            <input id="login" type="text" name="login" style="width: 368px; height: 35px;" >
            <label for="pass">Mot de passe : </label>
            <input id="pass" type="password" name="pass" style="height: 15px;">
            <input type="submit" value="Valider" name="valider">
  </form>

</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>
