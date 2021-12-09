<?php 
    $msgResultatScore = "";
   
    
    $score = $scorePlayer->addScore(1,3);

    var_dump("le resultat est bien inscrit dans la db");

    $msgResultatScore = $score;
    
    
    if (isset($_POST["id"])&& ($_POST["score"])){
        
       // var_dump($_POST["score"]);
    // var_dump($_POST["id"]);
        
        $scorePlayer = new User();

       /*  $score = $scorePlayer->addScore($_POST["id"],$_POST["score"]); */
        $msgResultatScore = $_POST["score"];

        header("Location:?section=resultat");
    }
  

    include("views/page/resultat.php");
    
?>

<!-- page des résultats du joueur - personne est connecté -->