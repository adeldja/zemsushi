<?php
	//zone de récupération des variables du formulaire

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
                <p class="text-center"><strong>Titre de la nouvelle page</strong></p>

                <?php
                    if(count($_POST)==0)	// condition à compléter si besoin
                    {
                ?>

                <!--formulaire HTML à construire ici-->

                <?php
                    }
                    else {
                            // traitement php à écrire ici, si le formulaire a été correctement rempli
                    }
                ?>


            </div>
			<!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
        </div>
    </body>
</html>

<?php
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
?>
