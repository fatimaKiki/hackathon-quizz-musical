<?php 
    $msgResultatScore = "";

    if (isset($_POST["nom"])){
        $scorePlayer = new User();

        $score = $scorePlayer->addScore($_POST["nom"]);

        if ($score != null) {

        }

    }


   






    include("views/page/resultat.php");
    
?>

<!-- page des résultats du joueur - personne est connecté -->