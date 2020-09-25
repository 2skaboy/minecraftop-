<!DOCTYPE html>
<html>
    <head>
        <title>Veuillez entrer votre code</title>
        <meta charset="utf-8" />
    </head>
    <body>

            <?php 

            if (isset($_POST['mdp']) AND $_POST['mdp'] == "caca") {
                
            ?>
                <h1>Voici les codes d'accès de la nasa</h1>
            <?php
            }
            else
            {
                echo '<p>Mauvais mot de passe</p>';
            }

            ?>

    </body>
</html>