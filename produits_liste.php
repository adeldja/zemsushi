<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <?php require("./head.html");	?>

	<body class="bg-dark text-light"> <!-- contenu visuel d'un document html -->
		<div class="container bg-dark"> <!-- cadre principal avec bannière de logo -->
			<?php include("./banner.html");?>
			<div id="menu">
                <?php include("./menu.php"); ?>
			</div>
            <div id="corps">
                <table class="table table-striped table-dark">
                	<?php affiche_produits(); ?>
				</table>
			</div>
			<!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
		</div>
	</body>
</html>

<?php
    function affiche_produits()
    {
        include ("./connexion_db.php");
        $req = "SELECT * FROM produit;";

        try{
            foreach ($cnx->query($req) as $ligne){
                echo "<tr>";
                echo "<td><small>".$ligne['nom_prod']."</small></td>";
                echo "<td class='text-justify'>".$ligne['desc_prod']."</td>";
                echo "<td class='text-center'>".$ligne['nb_pieces']." pi&egrave;ces</td>";
                echo "<td class='text-center'>".$ligne['prix_prod']." &euro;</td>";
                echo "</tr>";
            }
        }
        catch (PDOException $exc)
        {
            die("Erreur : ".$exc->getMessage());
        }
    }
?>
