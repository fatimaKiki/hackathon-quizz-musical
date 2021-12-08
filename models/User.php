<?php 
    include('Connection.php');
    // permet de hasher un mdp pour l'ajouter dans la db
    // echo password_hash('admin', PASSWORD_DEFAULT);

    class User extends Connection {
        // ============ CONNEXION =========
        // retourne l'utilisateur si il existe
        public function verify($nom) {
            if (empty($nom)) {
                return false;
            }
            try {
                $requete = "SELECT * FROM joueur WHERE nom = :nom";
                $params = array(
                    ":nom" => $nom
                );

                if($this->execute($requete, $params)!= null){
                    $data = $this->execute($requete, $params)[0];
                    // var_dump($data);
                    // var_dump('Utilisateur is ok');
                    $arrayData = array(
                        "nom" => $data["nom"]);
                    return $arrayData;
                    }
				else {
						// l'utilisateur n'existe pas
					return false;
					}
            
            } catch (PDOException $e) {
                return false;
            }
        }
	// ajoute un thé
	public function addPlayer($params)
	{
		var_dump($params);
		
		try{
			$requete = "INSERT INTO joueur (nom) VALUES (:nom)";
			$id = $this->add($requete, $params);
			return $id;
		}
		catch(PDOException $e){
			var_dump($e);
			return false;
		}
		
	}



    }
?>