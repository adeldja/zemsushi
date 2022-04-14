<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<?php require("./head.html");	?>

    <body class="bg-dark text-light">
        <div class="container bg-dark">
            <?php include("./banner.html");?>
            <div id="menu">
                <?php include("./menu.php"); ?>
            </div>
            <div id="corps">
                <h1 class="text-center">Informations Client</h1>

		<!-- Affichage d'un paragraphe HTML contenant toutes les informations du client n°6 -->
                <?php 
                    $leClient = getClientById(6);
                ?>
                <div id="corps" class="alert alert-primary" role="alert">
                    Civilité : <?php echo $leClient['civilite_client'].'</br>';?>
                    Nom : <?php echo $leClient['nom_client'].'</br>';?>                    
                    Prenom : <?php echo $leClient['prenom_client'].'</br>';?>
                    Telephone : <?php echo $leClient['tel_client'].'</br>';?>
                    Adresse : <?php echo $leClient['adr_client'].'</br>';?>
                    Code postal : <?php echo $leClient['cp_client'].'</br>';?>
                    Ville : <?php echo $leClient['ville_client'].'</br>';?>
                    Mail : <?php echo $leClient['mail_client'].'</br>';?>
                    Identifiant Client : <?php echo $leClient['id_client'].'</br>';?>
                    Mot de passe : <?php echo $leClient['mdp_client'].'</br>';?>
                </div>

                



            </div>
			<!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
        </div>
    </body>
</html>

<?php
	function getClientById($un_num)
	{


        // requête de sélection des informations du client dont le numéro est $un_num
        
        	include("./connexion_db.php");

        	$laCo= $cnx->prepare("SELECT * FROM client WHERE num_client=:un_num");
                $laCo->bindValue(':un_num',$un_num, PDO::PARAM_INT);
                $laCo->execute();

                $resultat = array();
                $resultat = $laCo->fetch();
        
       // retour du client obtenu pour traitement
            return $resultat;

	
	}
?>
