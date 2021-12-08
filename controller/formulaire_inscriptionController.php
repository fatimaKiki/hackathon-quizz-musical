<?php 
    include("models/Asbl.php");
    $asbl = new Asbl();
    $msg = "";
    if(isset($_POST["nom"], $_POST["email"], $_POST["numEntreprise"], $_POST["adresse"], $_POST["numero"], $_POST["code_postal"], $_POST["commune"], $_POST["gsm"], $_POST["description"], $_POST["mot_de_passe"])){
        if(trim($_POST["nom"]) != ""){

            
            $data = array(
                ":numero_entreprise" => trim($_POST["numEntreprise"]),
                ":nom" => trim($_POST["nom"]),
                ":adresse_rue" => trim($_POST["adresse"]),
                ":adresse_numero" => trim($_POST["numero"]),
                ":code_postal" => trim($_POST["code_postal"]),
                ":commune" => trim($_POST["commune"]),
                ":telephone" => trim($_POST["gsm"]),
                ":email" => trim($_POST["email"]),
                ":mot_de_passe" => password_hash(trim($_POST["mot_de_passe"]), PASSWORD_DEFAULT),
                ":description" => trim($_POST["description"])


            );
            var_dump($data);
            $id = $asbl->addAsbl($data);
            var_dump($id);
            if($id!=false){
                 // rediriger vers une autre page
                header("Location:?section=connexion");
            }
           
            
           
        }
        else {
            $msg ="<p style='color:red'>Veuillez remplir coreectement le formulaire</p>";
        }
    }

    include("views/page/formulaire_inscription.php");

?>
