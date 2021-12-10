<?php

// include("models/User.php");
// $player = new User();
// $msgResultatScore = "";


// /* $score = $player->addScore(9, 5);
// var_dump("le resultat est bien inscrit dans la db");
//  */

var_dump($_SESSION['score']);

// if (isset($_POST["playerId"]) && ($_POST["score"])) {

//     var_dump($_POST["score"]);
//     var_dump($_POST["playerId"]);

//     $score = $player->addScore($_POST["playerId"], $_POST["score"]); 

//     $_SESSION['score'] = $score;

//     $msgResultatScore = "<p> le score est ". $score ."</p>";

//     header("Location:?section=resultat");
//     // include("views/page/resultat.php");
// }


include("views/page/resultat.php");

?>

<!-- page des résultats du joueur - personne est connecté -->