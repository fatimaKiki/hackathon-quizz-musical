<?php 
    include("models/User.php");
    $msg="";

    if(isset($_POST["score"]) && isset($_POST["playerId"])){
        $player= new User();
        // $user = $connexionUser->verify(htmlspecialchars($_POST['score']));
        var_dump($_POST['score']);
        // if($user != false){
        $_SESSION["score"] = $_POST["score"];
        $_SESSION["id"] = $_POST["id"];
            // $_SESSION["username"] = $user["firstname"];
        $score = $player->addScore($_POST["playerId"], $_POST["score"]); 
        // $_SESSION['score'] = $score;
        header("Location:?section=resultat");
        // var_dump($user);
        // } else {
        // session_destroy();
        //header("Location:?section=wrong-credentials");
        // $msg = "Invalid score";
        // var_dump($msg);
        // }
    }
    
    include("views/page/startGame.php");
?>