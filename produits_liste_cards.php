<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <?php
	if(count($_GET)!=0){
$id_categ=$_GET['id_categ'];
}
?>

   <?php require("./head.html");	?>

	<body class="bg-dark text-light"> <!-- contenu visuel d'un document html -->
		<div class="container bg-dark"> <!-- cadre principal avec bannière de logo -->
			<?php include("./banner.html");?>
			<div>
                <?php include("./menu.php"); ?>
			</div>
            <div class="row">

            	<?php
					if(count($_GET)!=0){
                                            $prods=getProduitsByCateg($id_categ);
                                        }
                                        else{
                                            $prods=getProduits();
                                        }
					foreach ($prods as $line) {
				?>
				<div class="col-xs-6 col-sm-4 col-md-3 mb-4">
					<!-- nouvelle carte produit / Bootstrap -->
					<div class="card border-light h-100">
						<!-- image d'en-tête de la carte produit -->
						<img class="card-img-top img-fluid" src="<?= $line['photo_prod'];?>" alt="prod">
						<!-- contenu de la carte produit -->
						<div class="card-body bg-dark text-light">
							<!-- titre de la carte produit -->
							<h5 class="card-title text-center">
								<strong><?=$line['nom_prod'];?></strong>
							</h5>
							<!-- contenu détaillé de la carte produit -->
							<div class="card-text">
								<p class="text-center text-danger">
									<strong>
										<?=$line['prix_prod'];?>&euro; / <?=$line['nb_pieces'];?>
										<?php
											if($line['nb_pieces'] == 1)
												echo " pièce";
											else echo " pièces";
										?>
									</strong>
								</p>
								<p>
									<small><?=$line['desc_prod'];?></small>
								</p>
							</div>
						</div>
					</div>
                </div>
				<?php
					}
				?>
			</div>
			<!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
		</div>
	</body>
</html>

<?php
    function getProduits()
    {
        try {
			include ("./connexion_db.php");
			/* @var $cnx PDO */
			$req = $cnx->prepare("SELECT * FROM produit;");
			$req->execute();
			$produits = $req->fetchAll();
        } catch (PDOException $e) {
        	die("Error Processing Request : ". $e->getMessage());
        }

		return $produits;
	}
        
    function getProduitsByCateg($idC){ 
	 try {
            include ("./connexion_db.php");
            /* @var $cnx PDO */
            $req = $cnx->prepare("SELECT * FROM produit WHERE id_categ=:id_categ");
	$req->bindValue(':id_categ', $idC, PDO::PARAM_INT);
            $req->execute();
            $produits = $req->fetchAll();
        } catch (PDOException $e) {
            die("Error Processing Request : ". $e->getMessage());
        }
        return $produits;
    }

?>
