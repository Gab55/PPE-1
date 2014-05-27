
<body>
<!-- colonneCentre -->
<div id="colonneCentre">
    <!-- HEADER -->
    <div id="header">
        <!-- LOGO -->
        <div id="logo">
        </div><!-- END OF LOGO -->
        <!-- NAVIGATION BAR-->
        <div id="nav">
            <ul class="lavaLamp" id="menu">
                <li><a class="active" id="trigger3" href="index.php?uc=accueil">Retour accueil</a></li>
                <?php  if (isset($_SESSION['admin'])){ // Si on est connecté on affiche deconnexion
                            echo "<li><a id='trigger3' href=\"index.php?uc=GestionAdmin&action=deconnexion\">Déconnexion</a></li>";
                      }?>

            </ul>
        </div><!-- END OF NAVIGATION BAR-->
    </div><!-- END OF HEADER -->
    <!-- Contenu -->
    <div id="contenu">