<?php
    if(count($_GET)!=0){
        $num = $_GET['num'];
    }
?>
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
                <h1 class="text-center">Informations client</h1>
                    <!-- Affichage d'un paragraphe HTML contenant toutes les informations du client n°6 -->
                    <?php $un_client = getClientById($num);?>
                    <div class="alert alert-primary" role="alert">
                        Civilité : <?=$un_client['civilite_client'];?><br/>
                        Nom : <?=$un_client['nom_client'];?><br/>
                        Prénom : <?=$un_client['prenom_client'];?><br/>
                        Numéro de téléphone : <?=$un_client['tel_client'];?><br/>
                        Adresse postale : <?=$un_client['adr_client'];?> <?=$un_client['cp_client'];?> <?=$un_client['ville_client'];?><br/>
                        Adresse mail : <?=$un_client['mail_client'];?><br/>
                        Identifiant : <?=$un_client['id_client'];?><br/>
                        Mot de passe : <?=$un_client['mdp_client'];?><br/>
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
                include('./connexion_db.php');
                
                $req = $cnx->prepare("SELECT * FROM client WHERE num_client=:un_num");
                $req->bindValue(':un_num',$un_num,PDO::PARAM_STR);
                $req->execute();
                
                $resultat = array();
                $resultat = $req->fetch();
                
		// retour du client obtenu pour traitement
                return $resultat;
	}
?>
