<?php
include("models/User.php");
$joueur = new User();
$msgErreurInscription = "";


if (isset($_POST["nom"])) {

    if (trim($_POST["nom"]) != "") {

        $data = array(
            ":nom" => trim($_POST["nom"])
        );

        /* If si mon user n'existe pas */
        $joueurNotExist = $joueur->joueurNotExist(htmlspecialchars($_POST['nom']));
        //var_dump($joueurNotExist);

        //retourner vrai si n'existe pas
        if ($joueurNotExist) {
            var_dump('function verify good');

            $last_insert_id = $joueur->addPlayer($data);
            $joueur1 = $joueur->getJoueur($last_insert_id);

            // incrémente la variable de session
            $_SESSION["count"] = 0;

    
            var_dump($data);
            var_dump("yolo");

            //$id = $joueur->addPlayer($data);
            
            $_SESSION["id"] = $last_insert_id;
        }

        //var_dump($id); /* a activer si on veut voir le nom de personne inscrites dans la db */

        if ($last_insert_id != false) {
            // rediriger vers la page pour commencer le jeu
            header("Location:?section=startGame");

            var_dump("je suis là ou je devrait etre");
        }
    } else {
        $msgErreurInscription = '<p>Ce compte existe déjà. Voulez-vous <a href="?section=connexion">connecter</a>?</p>';/* TODO si possible/temps ne manque pas mettre aussi du css ici. bisous sur vous (Manon) */
    }
}

else{
    $msgErreurInscription = '<p>Veuillez remplir correctement les champs s\'il vous plaît.</p>';
    //var_dump('aucun champs');
}

include("views/page/formulaire_inscription.php");
