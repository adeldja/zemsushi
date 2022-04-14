<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php" title="Page d'accueil">Accueil</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" title="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Carte
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-dark text-light" href="./produits_liste_cards.php">Carte complète</a>
                            <?php
                                $categs= getCategories();
                                foreach ($categs as $line){
                            ?>
                                <a class="dropdown-item bg-dark text-light" href="./produits_liste_cards.php?id_categ=<?=$line['id_categ'];?>" title="<?=$line['libelle_categ'];?>"><?=$line['libelle_categ'];?></a>
                            <?php
                                }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#" title="About">Qui sommes nous ?</a></li>
                    <li class="nav-item"><a class="nav-link" href="./localisation.php" title="Trouver">Où nous trouver ?</a></li>
                    <?php
                        if(!isset($_SESSION['num'])){
                    ?>
                    <li class="nav-item"><a class="nav-link" href="identification.php" title="Connexion">Connexion</a></li>
                    <?php
                        }
                        else{
                    ?>
                    <li class="nav-item"><a class="nav-link" href="infos_client.php?num=<?=$_SESSION['num'];?>" title="Mon Compte">Mon Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=deconnexion" title="Deconnexion"><i class="fas fa-power-off"></i></a></li>
                        <?php
                        }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="#" title="Panier"><i class="fas fa-shopping-basket"></i></a></li>
                </ul>

            </div>
        </nav>
    </div>
</div>

<?php
    function getCategories() {
        try{
            include("./connexion_db.php");
            /* @var $cnx PDO */
            $req = $cnx->prepare("SELECT * FROM categorie;");
            $req->execute();
            $categories = $req->fetchAll();
        } catch (PDOException $e){
            die("Erreur :" . $e->getMessage());
        }
        return $categories;
    }
?>
