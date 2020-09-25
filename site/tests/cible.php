<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Test pour faire transférer des données url grace a un formulaire<br />
            <?php echo "salut"; ?></br>
            Voici quelques petits tests précédents :
        </p>
        <?php
            echo "Nous sommes le : ";   
            echo date('d');
            echo "/";
            echo date('m');
            echo "/";
            echo date('Y');
            echo " et il est : ";
            echo date('H');
            echo "h:";
            echo date('i');
        ?>

    <p>Bonjour <?php echo htmlspecialchars($_POST['Pseudo']) ; ?></p>


    </body>
</html>