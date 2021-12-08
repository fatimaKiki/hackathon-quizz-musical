<?php 
    include('Connection.php');
    // permet de hasher un mdp pour l'ajouter dans la db
    // echo password_hash('admin', PASSWORD_DEFAULT);

    class User extends Connection {
        // ============ CONNEXION =========
        // retourne l'utilisateur si il existe
        public function verify($email, $mdp) {
            if (empty($email) || empty($mdp)) {
                return false;
            }
            try {
                $requete = "SELECT * FROM asbl WHERE email = :email";
                $params = array(
                    ":email" => $email
                );

                if($this->execute($requete, $params)!= null){
                    $data = $this->execute($requete, $params)[0];
                    // var_dump($data);
                   
                    if(password_verify($mdp, $data['mot_de_passe'])) {
                        // var_dump('Utilisateur is ok');
                        $arrayData = array(
                            "id" => $data["id_asbl"],
                            "email" => $data["email"],
                            "nom" => $data["nom"]

                        );
                        return $arrayData;
                
                    }
                    else {
                        // le mot de passe n'est pas valide
                        return false;
                    }

                }
                else {
                    // l'utilisateur n'existe pas
                    return false;
                }
            
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>