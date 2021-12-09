<?php

include("models/User.php");
$scorePlayer = new User();
$msgResultatScore = "";


$score = $scorePlayer->addScore(2, 5);
$msgResultatScore = $score;
/* var_dump("le resultat est bien inscrit dans la db");
 */



if (isset($_POST["id"]) && ($_POST["score"])) {

    var_dump($_POST["score"]);
    var_dump($_POST["id"]);

    $score1 = $scorePlayer->addScore($_POST["id"],$_POST["score"]); 


    $msgResultatScore = "<p> le score est ". $score ."</p>";

    // header("Location:?section=resultat");
    include("views/page/resultat.php");
}


// include("views/page/resultat.php");

?>

<!-- page des résultats du joueur - personne est connecté -->