<!DOCTYPE html>
<html>
        <head>
            <title>Cour sur le php</title>
            <meta charset="utf-8" />
        </head>
        <body>
            <p style="text-align: center; color: green; font-family: Impact;">
                <ul>
                    <li>
                        $_SERVER : ce sont des valeurs renvoyées par le serveur. Elles sont nombreuses et quelques-unes d'entre elles peuvent nous être d'une grande utilité. Je vous propose de retenir au moins$_SERVER['REMOTE_ADDR']. Elle nous donne l'adresse IP du client qui a demandé à voir la page, ce qui peut être utile pour l'identifier.
                    </li>
                </br>
                    <li>
                        $_ENV : ce sont des variables d'environnement toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.
                    </li>
                </br>
                    <li>
                        $_SESSION : on y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. Nous allons apprendre à nous en servir dans ce chapitre.
                    </li>
                </br>
                    <li>
                        $_COOKIE : contient les valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.
                    </li>
                </br>
                    <li>
                        $_GET : vous la connaissez, elle contient les données envoyées en paramètres dans l'URL.
                    </li>
                </br>
                    <li>
                        $_POST : de même, c'est une variable que vous connaissez et qui contient les informations qui viennent d'être envoyées par un formulaire.
                    </li>
                </br>
                    <li>
                        $_FILES : elle contient la liste des fichiers qui ont été envoyés via le formulaire précédent.
                    </li>
                </ul>
            </p>
        </body>
</html>