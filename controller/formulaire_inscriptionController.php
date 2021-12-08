<?php 
    include("models/User.php");
    $joueur = new User();
    $msg = "";
    if(isset($_POST["nom"])){
        if(trim($_POST["nom"]) != ""){

            
            $data = array(
                
                ":nom" => trim($_POST["nom"])

            );
            var_dump($data);
            var_dump("yolo");

            $id = $joueur->addPlayer($data);

            $_SESSION["id"] = $id;
            
            var_dump($id);

            if($id!=false){
                 // rediriger vers une autre page
                header("Location:?section=erreur");
                
                var_dump("je suis là ou je devraitr etre");
            }

        }
        else {
            $msg ="<p style='color:red'>Veuillez remplir coreectement le formulaire</p>";
        }
    }

    include("views/page/formulaire_inscription.php");

?>
