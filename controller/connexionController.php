<?php
include("models/User.php");
include("models/Asbl.php");
$msg = "";
if (isset($_POST["email"], $_POST["motDePasse_connexion"])) {
    // var_dump("couco");
    $connexionUser = new User();

    $user = $connexionUser->verify(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['motDePasse_connexion']));

    if ($user != false) {
        $_SESSION["user"] = $user;
        // var_dump($_SESSION["user"]);
        header("Location:index.php?section=accueil_connexion");
    } else {
        $msg = "<p style='color:red'>L'email / mot de passe ne sont pas valides</p>";
    }
}


include("views/page/connexion.php");
