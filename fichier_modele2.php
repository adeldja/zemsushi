<?php
	//zone de récupération des variables du formulaire
if(count($_POST)!=0){
	$civilite=$_POST['civilite'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$adr=$_POST['adr'];
	$cp=$_POST['cp'];
	$ville=$_POST['ville'];
	$tel=$_POST['tel'];
	$mail=$_POST['mail'];
	$id=$_POST['id'];
	$mdp=$_POST['mdp'];
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
                <h1 class="text-center">Inscription + maria</h1>

                <?php
                   
                    if(count($_POST)==0 || est_vide($nom)|| est_vide($prenom)|| est_vide($adr)|| !est_num($cp)|| est_vide($ville)|| est_vide($tel)|| est_vide($id)|| est_vide($mdp))	// condition à compléter si besoin si on deja envoyer ou pas 
                    {
                ?>

                <form action="fichier_modele2.php" method="post">

									<fieldset class="form-group">
										<div class="row">
											<legend class="col-form-label col-sm-2 pt-0">* Civilité :</legend>
												<div class="col-sm-10">
													<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="civilite" value="Mr."/>
															<label class="form-check-label" for="gridRadios1">Mr.</label>
													</div>
													<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="civilite" value="Mme"/>
															<label class="form-check-label" for="gridRadios1">Mme.</label>
													</div>
													<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="civilite" value="Mlle"/>
															<label class="form-check-label" for="gridRadios1">Mlle.</label>
													</div>
											</div>
										</div>
									</fieldset>

									<div class="form-group row">
										<label for="nom" class="col-sm-2 col-form-label">*  Nom :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nom"
												<?php
													if(count($_POST)!=0 && !est_vide($nom)){
														echo "value='$nom'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($nom)) {				
													echo "Champ Incorrect";
												 } 
												?>

											</div>
									</div>

									<div class="form-group row">
										<label for="prenom" class="col-sm-2 col-form-label">*  Prénom :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="prenom"
												<?php
													if(count($_POST)!=0 && !est_vide($prenom)){
														echo "value='$prenom'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($prenom)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
								 		<label for="adr" class="col-sm-2 col-form-label">*  Adresse :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="adr"
												<?php
													if(count($_POST)!=0 && !est_vide($adr)){
														echo "value='$adr'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($adr)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
										<label for="cp" class="col-sm-2 col-form-label">*  Code Postal :</label>
											<div class="col-sm-10">
										 		<input type="text" class="form-control" name="cp"
										 		<?php
													if(count($_POST)!=0 && !est_vide($cp)){
														echo "value='$cp'" ;
														}
												?>
												/>
										 		<?php 
												if (count($_POST)!=0 && !est_num($cp)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
										<label for="ville" class="col-sm-2 col-form-label">*  Ville :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="ville"
												<?php
													if(count($_POST)!=0 && !est_vide($ville)){
														echo "value='$ville'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($ville)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
										<label for="tel" class="col-sm-2 col-form-label">*  Téléphone :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="tel"
												<?php
													if(count($_POST)!=0 && !est_vide($tel)){
														echo "value='$tel'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($tel)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
										<label for="mail" class="col-sm-2 col-form-label">*  E-mail :</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" name="mail"
												<?php
													if(count($_POST)!=0 && !est_vide($mail)){
														echo "value='$mail'" ;
														}
												?>

												/>
												<?php 
												if (count($_POST)!=0 && est_vide($mail)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
										<label for="id" class="col-sm-2 col-form-label">*  Identifiant :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="id"
												<?php
													if(count($_POST)!=0 && !est_vide($id)){
														echo "value='$id'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($id)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="form-group row">
										<label for="mdp" class="col-sm-2 col-form-label">*  Mot de passe :</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="mdp"
												<?php
													if(count($_POST)!=0 && !est_vide($mdp)){
														echo "value='$mdp'" ;
														}
												?>
												/>
												<?php 
												if (count($_POST)!=0 && est_vide($mdp)) {				
													echo "Champ Incorrect";
												 } 
												?>
											</div>
									</div>

									<div class="col-sm-10 text-center">
										<div class="col-sm-10">
											<button type="submit" class="btn btn-outline-primary">Envoyer</button>
											<button type="reset" class="btn btn-outline-danger">Effacer</button>
										</div>
									</div>

							</form>
								<p>* Champ obligatoire</p>


                	
                    
            

               




            </div>
			<!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
        </div>
    </body>
</html>
<?php
					}
					else {
						header('Location: ./index.php');
						// requête à écrire ici, si le formulaire a été correctement rempli
            			//on prépare la requete
                                                 include("./connexion_db.php"); 

      					$req = $cnx->prepare('INSERT INTO client(civilite_client, nom_client, prenom_client,
               		    tel_client, mail_client, adr_client, cp_client, ville_client, id_client, mdp_client, code_secteur )
                  		VALUES(:civilite_client, :nom_client, :prenom_client, :tel_client, :mail_client,
                   		:adr_client, :cp_client, :ville_client, :id_client, :mdp_client, 1)');

        				$req->bindValue(':civilite_client',$civilite, PDO::PARAM_STR);
        				$req->bindValue(':nom_client', $nom, PDO::PARAM_STR);
        				$req->bindValue(':prenom_client',$prenom, PDO::PARAM_STR);
        				$req->bindValue(':tel_client',$tel, PDO::PARAM_STR);
        				$req->bindValue(':mail_client',$mail, PDO::PARAM_STR);
        				$req->bindValue(':adr_client',$adr, PDO::PARAM_STR);
        				$req->bindValue(':cp_client',$cp, PDO::PARAM_INT);
        				$req->bindValue(':ville_client',$ville, PDO::PARAM_STR);
        				$req->bindValue(':id_client',$id, PDO::PARAM_STR);
        				$req->bindValue(':mdp_client',$mdp, PDO::PARAM_STR);

        				$req->execute();

    exit;
    }
					


	function est_vide($un_champ)
	{
		if($un_champ=="")
		{
			$result=true;
		}
		else{
			$result=false;
		}
		return $result;
                
	};
     
        function est_num($un_champ)
    {
        if (!is_numeric($un_champ) || $un_champ=="") {
            $result=false;
        }
        else{
            $result=true;
        }

        return $result;
    }
?>
