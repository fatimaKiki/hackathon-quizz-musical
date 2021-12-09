<?php

if (isset($_GET["section"])) {
    switch ($_GET["section"]) {
        case 'accueil':
            include("controller/accueilController.php");
            break;
        case 'startGame':
            include("controller/startGameController.php");
            break;
        case 'erreur':
            include("controller/erreurController.php");
            break;
        case 'connexion':
            include("controller/connexionController.php");
            break;
        case 'formulaire_inscription':
            include("controller/formulaire_inscriptionController.php");
            break;
        case 'deconnexion':
            include("controller/deconnexionController.php");
            break;
        case 'accueil_connexion':
            include("controller/accueil_connexionController.php");
            break;
            case 'introStartGame':
                include("controller/introStartGameController.php");
                break;
        default:
            include("views/error/404");
            break;
    }
} else {
    include("views/page/accueil.php");
    // include ("views/menu/menuDeconnecte.php");
}
