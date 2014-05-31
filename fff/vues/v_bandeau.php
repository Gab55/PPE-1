
<body>

<div id="colonneCentre">

    <div id="header">

        <div id="logo">
        </div>

        <div id="nav">

            <ul class="lavaLamp" id="menu">

                <?php  if (isset($_SESSION['admin'])){
                            echo "<li><a class='active' id='trigger3' href='index.php?uc=accueil'>Retour accueil</a></li>";
                            echo "<li><a id='trigger3' href=\"index.php?uc=GestionAdmin&action=deconnexion\">Déconnexion</a></li>";

                      }?>
            </ul>

        </div>
    </div>

    <div id="contenu">