<?php

if (isset($_GET["section"])) {
    switch ($_GET["section"]) {
        case 'accueil':
            include("controller/accueilController.php");
            break;
        case 'reseau':
            include("controller/reseauController.php");
            break;
        case 'evenements':
            include("controller/evenementsController.php");
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
        case 'form_event':
            include("controller/form_eventController.php");
            break;
        case 'form_agenda':
            include("controller/form_agendaController.php");
            break;
            case 'map':
                include("controller/mapController.php");
                break;
        default:
            include("views/error/404");
            break;
    }
} else {
    include("views/page/accueil.php");
    // include ("views/menu/menuDeconnecte.php");
}
