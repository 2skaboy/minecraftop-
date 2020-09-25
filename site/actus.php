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
    #heure
    {
        font-size: 1.3em;
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
    @media all and (max-device-width: 480px)
    {

        #fond
        {
            max-width: auto;
            width: 985px;
            margin: 40px;
        }

    }

.element:nth-child(2)
{
    background-color: #FFD530;
    margin: 8px;
    padding: 3px;
    border: 3px solid black;

}
.element:nth-child(3)
{
    background-color: #4CFF00;
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
    text-decoration:#002813;
}

nav a:hover
{
    color: #002813;
    border-bottom: 3px solid #002813;
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

#logo img
{
    width: 59px;
    height: 60px;
}
header
{
    background-color:#606060;
    padding: 20px;
    padding-top: 3px;
    margin-top: 30px;
    margin-bottom: 15px;
    border-radius: 10px;
    border: 2px solid black;

}

header h1
{
    font-family: 'Impact', serif;
    font-size: 2.5em;
    font-weight: normal;
    margin: 0 0 0 10px;
}

header h2
{
    font-family: 'Impact', serif;
    font-size: 30px;
    margin-top: 0px;
    font-weight: normal;
}

#bloc_page
{
    width:  900px;
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
    background: url("images/fond.png");
}

nav a:hover
{
    color: #002813;
    border-bottom: 2px solid #002813;
}

            p
    {
        text-align: center;
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
        font-size: 33px;
        font-family: Impact 

    }
    #serveur
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid gold;
        padding: 30px; 
        margin: 20px;
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 523px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur
    {
        float: left;
        margin-left: 30px;
        margin-top: 9px;
    }
        h6
    {
            float:right;
            margin: 10px 0;
            text-align: right;
            padding: auto;
    }
    aside
    {
        background: url('images/séparateur.png') repeat-x bottom; 
    }
    #vidéos 
    {
        margin-top: 10px;
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

        </style>

        <title>Actus | Minecraft-Top</title>
    
        </head>
            <body>
            <div id="fond">
                <div id="bloc_page">

                <header>
                    <div id="titre_principal">
                    <div id="logo">
                    <h1>Actus 📰</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>
                    
                    </header>  
                    <aside>
                            
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
            </article>

                        <?php include('footer.php'); ?>
            </div>
        </body>
</html>