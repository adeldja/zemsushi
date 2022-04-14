<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <?php require("./head.html");	?>

	<body class="bg-dark text-light"> <!-- contenu visuel d'un document html -->
		<div class="container bg-dark"> <!-- cadre principal avec bannière de logo -->
			<?php include("./banner.html");?>

            <div> <!-- bandeau de menu -->
                <?php include("./menu.php"); ?>
            </div>

            <!-- corps de la page contenant les 3 sous-cadres avec filet de contour-->
			<div class="row">
				<!--cadre d'adresse 1-->
				<div class="rounded-border col-4 offset-1 border border-white mb-4">
                    <p><strong>Zem'Sushis Tarbes</strong></p> <!-- le texte s'affichera en gras -->
                    <p>
                            <i class="fas fa-map-marked-alt"></i>
							2, Rue Georges Ledormeur <br />
                            65000 TARBES
                    </p>
                    <p><i class="fas fa-phone"></i> 05 62 44 56 56</p>
                    <div class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.315977378055!2d0.07493395116374213!3d43.22383438800389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a9d3888851b0cf%3A0x621b3bf561a7c77f!2s2+Rue+Georges+Ledormeur%2C+65000+Tarbes!5e0!3m2!1sfr!2sfr!4v1453654454213" width="300" height="150" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>


                <!--cadre d'adresse 2-->
                <div class="rounded-border col-4 offset-2 border border-white mb-4">
                    <p><strong>Zem'Sushis Ibos</strong></p> <!-- le texte s'affichera en gras et en bleu -->
                    <p>
                            <i class="fas fa-map-marked-alt"></i>
							Route de Pau <br />
                            65420 IBOS
                    </p>
                    <p><i class="fas fa-phone"></i> 05 62 32 24 24</p>
                    <div class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.522953730649!2d0.017384551164158497!3d43.24046058693699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a9d5c28c3b8fcb%3A0x60f26bf9896f2702!2s5454A+Route+de+Pau%2C+65420+Ibos!5e0!3m2!1sfr!2sfr!4v1453654681734" width="300" height="150" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
			</div>

            <!-- cadre contenant les horaires -->
			<div class="row">
			    <div class="col-12 mb-4 bd-callout bd-callout-danger">
                    <p>
						<i class="fas fa-clock"></i>
						<strong>Horaires d'ouverture :</strong>
					</p>
                    <p>
                        Vos deux restaurants vous accueillent du lundi au samedi de 11h00 &agrave; 23h00. <br/>
                        Ouverture exceptionnelle les vendredis 1<sup>er</sup> et 8 mai 2020.
                    </p>
                </div>
			</div>


            <!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
        </div>
    </body>
</html>
