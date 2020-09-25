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
.element:nth-child(2)
{
    background-color: #FFD530;
    margin: 8px;
    padding: 3px;
    border: 3px solid black;

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
#fond
{
    background-color:#606060;
    padding: 20px;
    padding-top: 3px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
    border: 2px solid black;
    margin-left: 175px;
    margin-right: 175px;
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
    background-color: darkgray;
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
        border-right: 3px solid gold;
    }
        h6
    {
            float:right;
            margin: 10px 0;
            text-align: right;
            padding: auto;
    }
    video
    {
        margin-top: 50px;
        margin-bottom: 100px;
    }
    aside
    {
        margin-bottom: 50px;
        margin-top: 50px;
    }
    article
    {
        margin-bottom: 50px;
        margin-top: 50px;
        font-size: 20px;
        font-family: Impact;
    }
        </style>

        <title>Hypixel | Minecraft-Top</title>
    
        </head>
            <body>
            <div id="fond">
                <div id="bloc_page">

                <header>
                    <div id="titre_principal">
                    <div id="logo">
                    <h1>Hypixel</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>
                    
                    </header>
                    
                    <aside> 
                        <div id="logo_serveur">
                            <img src="images/logohypixel.png" style="float: left;"/>
                        </div>
                        <div id="serveur"> 
                            🥇 <a href="hypixel.php">Hypixel</a> | ip: mc.hypixel.net | 🥇
                           </div>
                    </aside>
                    <article>
                      >  90 000 Slots</br>   >  + de 15 millions de joueurs inscrits en 2020</br> > Serveur Premium</br>
                    </br>
                    <video src="videos/Hypixel Server Trailer - Play now on mc.hypixel.net.mp4" controls width="400px" height="200px" style="float: right;"></video></br>
                    Depuis quelques temps, Hypixel détient une affluence record, du jamais vu sur Minecraft !</br>
                    Avec 4 World Guinnes Records du jeu vidéo, c'est le plus grand serveur Minecraft de tous les temps !</br>
                    Les principaux modes de jeux sont:                   
                    <ul>
                        <li>Le Skyblock</li>
                        <li>Le BedWars</li>
                        <li>le SkyWars</li>
                        <li>Ou encore le BuildBattle</li>
                    </ul>
                    </br>
                    Au total, il y a <strong>21 Modes de Jeux !</strong>😮</br>
                    </ul>
                    </article>


                        <?php include('footer2.php'); ?>
            </div>
        </body>
</html>