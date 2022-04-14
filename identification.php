<?php
    if(!isset($_SESSION)){
        session_start();
    }
                                
    //zone de récupération des variables du formulaire
    if(count($_POST)!=0 && $_GET['action']=="inscription"){
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
        
        $action=$_GET['action'];
    }
    
    if(count($_POST)!=0 && $_GET['action']=="connexion"){
        $id=$_POST['id'];
        $mdp=$_POST['mdp'];
        
        $action=$_GET['action'];
    }

    if(count($_POST)==0 
        || ($action=="inscription" && (est_vide($nom) || est_vide($prenom) || est_vide($adr) || !est_num($cp) || est_vide($ville) || !est_num($tel) || est_vide($mail) || est_vide($id) || est_vide($mdp)))
        || ($action=="connexion" && (est_vide($id) || est_vide($mdp)))
        )	// condition à compléter si besoin
    {
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
                

                
                <p class="text-center"><strong>Inscription client</strong></p>
                <form action="identification.php?action=inscription" method="POST">
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Civilité : </legend>

                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="civilite" value="M." checked="checked"/>
                                    <label class="form-check-label">
                                            M.
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="civilite" value="Mme"/>
                                    <label class="form-check-label">Mme.</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="civilite" value="Mlle"/>
                                    <label class="form-check-label">Mlle.</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nom :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nom"
                                <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($nom)){
                                            echo "value='$nom'" ;
                                        }
                                    }
                                ?>
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && est_vide($nom)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Prénom :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="prenom"
                                <?php
                                 if (count($_POST)!=0 && $action=="inscription"){
                                     if(!est_vide($prenom)){
                                         echo "value='$prenom'" ;
                                     }
                                 }
                                ?>
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && est_vide($prenom)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Adresse :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="adr"
                                <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($adr)){
                                            echo "value='$adr'" ;
                                        }
                                    }
                                ?>
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && est_vide($adr)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Code Postal :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="cp"
                                <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($cp)){
                                            echo "value='$cp'" ;
                                        }
                                    }
                                ?>       
                            />
                        </div>
                        <?php 
                            if (count($_POST)!=0 && $action=="inscription" && !est_num($cp)) {
                                echo "Champ incorrect";
                            } 
                        ?>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ville :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="ville"
                                <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($ville)){
                                            echo "value='$ville'" ;
                                        }
                                    }
                                ?>       
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && est_vide($ville)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Téléphone :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="tel"
                                <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($tel)){
                                            echo "value='$tel'" ;
                                        }
                                    }
                                ?>       
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && !est_num($tel)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mail :</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="mail"
                                    <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($mail)){
                                            echo "value='$mail'" ;
                                        }
                                    }
                                ?>       
                                />
                                <?php 
                                    if (count($_POST)!=0 && $action=="inscription" && est_vide($mail)) {
                                        echo "Champ incorrect";
                                    } 
                                ?>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Identifiant :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="id"
                                <?php
                                    if (count($_POST)!=0 && $action=="inscription"){
                                        if(!est_vide($id)){
                                            echo "value='$id'" ;
                                        }
                                    }
                                ?>
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && est_vide($id)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mot de passe :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" name="mdp"/>
                            <?php 
                                if (count($_POST)!=0 && $action=="inscription" && est_vide($mdp)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 text-center">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            <button type="reset" class="btn btn-primary">Effacer</button>
                        </div>
                    </div>

                </form>
                
                
                <p class="text-center"><strong>Connexion client</strong></p>
                <form action="identification.php?action=connexion" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Identifiant :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="id"
                                <?php
                                    if (count($_POST)!=0 && $action=="connexion"){
                                        if(!est_vide($id)){
                                            echo "value='$id'" ;
                                        }
                                    }
                                ?>
                            />
                            <?php 
                                if (count($_POST)!=0 && $action=="connexion" && est_vide($id)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mot de passe :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" name="mdp"/>
                            <?php 
                                if (count($_POST)!=0 && $action=="connexion" && est_vide($mdp)) {
                                    echo "Champ incorrect";
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 text-center">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            <button type="reset" class="btn btn-primary">Effacer</button>
                        </div>
                    </div>
                </form>

            </div>
			<!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
        </div>
    </body>
</html>

<?php
                    }
                    else{
                        header("Location: ./index.php");
                        include("./connexion_db.php");
                        
                        if($action=="inscription"){
                            
                            // requête à écrire ici, si le formulaire a été correctement rempli
                            
                            $req = $cnx->prepare('INSERT INTO client(civilite_client, nom_client, prenom_client, tel_client, mail_client, adr_client, cp_client, ville_client, id_client, mdp_client, code_secteur) 
                                                    VALUES(:civilite_client,:nom_client, :prenom_client, :tel_client, :mail_client, :adr_client, :cp_client, :ville_client, :id_client, :mdp_client, 1)');

                            $req->bindValue(':civilite_client', $civilite, PDO::PARAM_STR);                                                
                            $req->bindValue(':nom_client', $nom, PDO::PARAM_STR);                                            
                            $req->bindValue(':prenom_client',$prenom, PDO::PARAM_STR);
                            $req->bindValue(':tel_client', $tel, PDO::PARAM_STR);
                            $req->bindValue(':mail_client', $mail, PDO::PARAM_STR);
                            $req->bindValue(':adr_client', $adr, PDO::PARAM_STR);
                            $req->bindValue(':cp_client', $cp, PDO::PARAM_INT);
                            $req->bindValue(':ville_client', $ville, PDO::PARAM_STR);
                            $req->bindValue(':id_client', $id, PDO::PARAM_STR);
                            $req->bindValue(':mdp_client',$mdp, PDO::PARAM_STR);

                            $req->execute();

                        }
                        elseif ($action=="connexion") {
                            
                            $req = $cnx->prepare("SELECT * FROM client WHERE id_client=:id_client AND mdp_client=:mdp_client");
                            $req->bindValue(':id_client', $id, PDO::PARAM_STR);
                            $req->bindValue(':mdp_client',$mdp, PDO::PARAM_STR);
                            $req->execute();
                            
                            $resultat = array();
                            $resultat = $req->fetch();
                            
                            if(count($resultat)!=0){
                                $_SESSION['id']=$id;
                                $_SESSION['num']=$resultat['num_client'];
                            }
                            
                        }
                        
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
    }

    function est_num($un_champ)
    {
        if($un_champ!="" && is_numeric($un_champ))
        {
            $result=true;
        }
        else{
            $result=false;
        }

        return $result;
    }
?>
