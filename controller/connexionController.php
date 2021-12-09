<?php
include("models/User.php");

$msg = "";
if (isset($_POST["nom"])) {
    // var_dump("couco");
    $connexionUser = new User();

    //vérifie que les connections (email, pseudo et mdp) existe déjà ou pas dans la db en passant par un tableau nommé $data
    $userComparaison = $connexionUser->verify(htmlspecialchars($_POST['nom']));

    if ($userComparaison != null) {

        // enregistrer dans une variable de session
        $_SESSION["user"] = $userComparaison["nom"];
        // var_dump($_SESSION["user"]);

         // incrémente la variable de session
         $_SESSION["count"] = 1;

         //je redirige le joeur vers la page d'acceuil
        header("Location:index.php?section=accueil_connexion");


    } else {
        $msg = "<p style='color:red'>Le nom n'est pas valide</p>";
    }
}

include("views/page/connexion.php");
