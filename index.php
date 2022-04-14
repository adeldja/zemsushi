<?php
    if(count($_GET)!=0){
        if($_GET['action']=="deconnexion"){
            session_start();
            unset($_SESSION['num']);
            unset($_SESSION['id']);
            session_destroy();
        }
    }
?>
<!DOCTYPE html>
 <html lang="fr" dir="ltr">
    <?php require("./head.html");?>

    <body class="bg-dark text-light"> <!-- contenu visuel d'un document html -->
        <div class="container bg-dark"> <!-- cadre principal avec bannière de logo -->
            <?php include("./banner.html");?>

            <div> <!-- bandeau de menu -->
                    <?php include("./menu.php"); ?>
            </div>

            <div>
                <p class="text-center">
                    <img class="img-fluid" src="./images/index-plat1.png" alt="img-index" />
                </p>
            </div>
            <!--pied de page avec logo creative commons -->
            <?php include("./footer.html");?>
        </div>
    </body>
</html>