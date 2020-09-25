<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
.element:nth-child(1)
{
    background-color: aqua;
    margin: 8px;
    padding: 3px;
    border: 3px solid black;
}
.element:nth-child(2)
{
    background-color: orange;
    margin: 8px;
    padding: 3px;
    border: 3px solid black;

}
.element:nth-child(3)
{
    background-color: chartreuse;
    margin: 8px;
    padding: 3px;
    border: 3px solid black;

}
.element:nth-child(4)
{
    background-color: red;
    margin: 8px;
    padding: 3px;
    border: 3px solid black;
}
#navserv 
{
    background: url('images/séparateur.png') repeat-x bottom; 
    display: flex;
    justify-content: space-between;
    align-items: none;
    padding-bottom: 10px;
    padding-top: 10px;
    font-size: 27px;
    flex-wrap: wrap;
}
header
{
    background: url('images/séparateur.png') repeat-x bottom; 
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}

nav ul
{
    font-family: Impact;
    list-style-type: none;
    display: flex;
}

nav li
{
    margin-right: 15px;
}

nav a
{
    font-family: Impact;
    font-size: 1.3em;
    color: red;
    padding-bottom: 3px;
    text-decoration:blue;
}

nav a:hover
{
    color: blue;
    border-bottom: 3px solid blue;
}
#titre_principal
{
    font-family: Impact;
    display: flex;
    flex-direction: column;
}

#logo
{
    display: flex;
    flex-direction: row;
    align-items: baseline;
    margin-top: 20px;
}
#monskin 
{
    float: right;
    margin-top: 10px;
}
#footer
{
    font-family: Impact;
    font-size: 20px;
    text-align: center;
}
header img
{
    margin-right: 10px;
}

header h1
{
    font-family: 'Impact', serif;
    font-size: 2.5em;
    font-weight: normal;
    margin: 0 0 0 10px;
    margin-bottom: 10px;
}

header h2
{
    font-family: 'Impact', serif;
    font-size: 30px;
    margin-top: 0px;
    font-weight: normal;
}

/*bloc_page pour la largeur du site*/
#bloc_page
{
    width: 1000px;
    margin: auto;
}

section h1, footer h1, nav a
{
    font-family: Dayrom, serif;
    font-weight: normal;
    text-transform: uppercase;
}

nav li
{
    margin-right: 15px;
}

nav a
{
    float: left;
    font-size: 1.3em;
    color: #181818;
    padding-bottom: 3px;
    text-decoration: none;
}
body
{
    background: url("images/log_oak.png");
}

nav a:hover
{
    color: blue;
    border-bottom: 2px solid blue;
}

            p
    {
        width: 550px;
        border: 4px solid black;
        text-align: center;
        padding: 30px; 
        margin: 7px;
        margin-bottom: 25px;
    }
    a:visited
    {
        color: black;

    }
    p:hover 
    {
        border-left: 3px solid black;

    }
            h1
    {
        text-align: left;
        font-weight: bold;
        font-family: Impact;
    }
            p
    {        
        text-align: center;
        color : #002813;
        font-weight: bold;
        font-size: 33px;
        font-family: Impact 

    }
    #serveur
    {
        margin-top: 10px;
        font-size: 33px;
        font-family: Impact;
    }
        h6
    {
            float:right;
            margin: 10px 0;
            text-align: right;
            padding: auto;
    }
    #vidéos 
    {
        margin-top: 10px;
    }
    #fond
    {
    background-color:#606060;
    padding: 20px;
    padding-top: 3px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
    border: 2px solid black;
    margin-left: 150px;
    margin-right: 100px;

    }
    body
    {
    background: url(images/fond.png);
    }
    @media all and (max-device-width: 480px)
    {

        #fond
        {
            max-width: auto;
            width: 985px;
            margin: 40px;
        }

    }
        #article
    {
        width: 850px;
        background-color:#606060;
        padding: 20px;
        padding-top: 3px;
        margin-top: 30px;
        margin-bottom: 30px;
        border-radius: 10px;
        border: 2px solid black;
        font-size: 20px;
        font-family:fantasy;
    }
    @media all and (min-width: 1024px) and (max-width: 1280px)
    {
        #fond
        {
            max-width: auto;
            width: 950px;
            margin: 40px;
        }
    }
    #heure
    {
        font-size: 1.3em;
    }
        </style>

        <title>Minecraft - Top | Serveurs minis jeux, factions, PvP et Roleplay</title>
    
        </head>
            <body>

            <div id="fond">
                <div id="bloc_page">


                <header>
                    <div id="titre_principal">
                    <div id="logo">
                        <h1>Accueil</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>
                    </header>
                    <div id="navserv">
                        <div class="element 1"><a href="minis-jeux.php">Minis-Jeux</a></div>
                        <div class="element 2"><a href="pvpfactions.php">PvP/Faction</a></div>
                        <div class="element 3"><a href="roleplay.php">Roleplay</a></div>
                        <div class="element 4"><a href="pvp.php">100% PvP</a></div>
                   </div>
                    <section>
                        <div id="monskin">
                            <img src="images/new on 1.16.png" alt="Gymp_MC" title="Nouveautés de la version 1.16 de Minecraft"/>
                        </div>
                        <div id="vidéos">
                            <video src="videos/Official Minecraft Trailer.mp4" width="600px" height="200px" controls></video>      
                        </div>    
                    </section>
                    <aside>
                        <p style="color:#002813">Site transféré en PHP 🐘, plus d'options disponibles ! </br>
                        </br>
                        🔔 Nouvelle actualitée sur le snapshot de la 20w16a, <a href="actus.php">voir</a>.</br>
                        </br>
                        Le site est vien d'ouvrir, les comptes, informations en direct arrivent, ne soyez pas trop indulgents !</p>


                    </aside>
                    <article>
                        <div id="article">
                            <img src="images/new on 1.16.png" style="float: right;"/>
                            <h2>Les nouveautés de la 20w16a ! 😲</br></h2>
                            <h3>par Gymp, posté le 21/04/2020</h3>

                            

                            Nouvelles fonctionnalités de 20w16a
                            <ul>

                                <li>Ajout de restes de Bastion!</li>
                                <li>Portails ruinés ajoutés</li>
                                <li>Blocs de chaîne ajoutés</li>
                            </ul>
                       

                            Ajout d'un nouveau disque de musique intitulé "Pigstep" qui ne peut être trouvé que dans les vestiges de bastions.</br>

                            Le reste des bastions sont faits en Blackstone et sont remplis de piglins !</br>

                            Ajout de 4 types de vestiges de bastions distincts: pont, écurie Hoglin, unités de logement et salle au trésor</br>
                            <img src="images/bastion.png" style="float: right;"/>
                            <img src="images/pilgin.png" style="float: left; margin: 10px; margin-left: 3px;"/>
                            </br>
                            Vous pouvez trouver ces structures considérables dans tous les biomes du Nether, à l'exception des tours perfides et poussiéreuses de cendres des deltas de basalte</br>
                            Explorez, pillez et conquérez un Bastion pour l'appeler votre maison ... mais attention, les Piglins ne prennent pas gentiment les intrus qui volent leurs affaires ! 😁</br>


                            Ils peuvent être trouvés dans n'importe quel biome du monde extérieur ou inférieur</br>
                            Certains sont cachés sous terre, sous la mer ou enfouis dans le sable</br>
                            <ul>
                                <li>Le motif de la bannière en piglin peut maintenant être trouvé dans les restes de Bastion
                                Augmentation de la quantité de bassins de lave pour rendre les deltas plus "deltaires"</li>
                            </ul>

                        </div>

                        <?php include('footer.php'); ?>

                    </article>
            </div>
        </body>
</html>