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
    @media all and (max-device-width: 480px)
    {

        #fond
        {
            max-width: auto;
            width: 985px;
            margin: 40px;
        }

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
    background: url(images/fondfaction.png);
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

nav a:hover
{
    color: blue;
    border-bottom: 2px solid blue;
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
    #serveur1
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
        padding-bottom: 24px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;
    }
     #logo_serveur1
    {
        border-right: 3px solid gold;
        padding-left: 8px;
        float: left;
        margin-left: 15px;
    }
    #serveur2
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid #282828;
        padding: 30px; 
        margin: 20px;
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 24px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;
    }
     #logo_serveur2
    {
        border-right: 3px solid #282828;
        float: left;
        margin-left: 20px;
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

        </style>

        <title>Launchers Pvp Faction Moddés | Minecraft-Top</title>
    
        </head>
            <body>
            <div id="fond">
                <div id="bloc_page">

                <header>
                    <div id="titre_principal">
                    <div id="logo">
                    <h1>PvP/Faction Moddé ⛏</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>

                    </header>  
            <aside>
                        <p>---| 👑 Liste des launchers 👑 |---</p>
                <div id="logo_serveur1">
                    <img src="images/logopaladium.png"/>
                </div>
                <div id="serveur1"> 
                 🥇 <a>Paladium</a> | <a href="https://paladium-pvp.fr/" target="_blank">Télécharger</a> | Premium                
             </div>
                <div id="logo_serveur2">
                    <img src="images/nationsglory.png"/>
                </div>
                <div id="serveur2"> 
                 🥈 <a>NationsGlory</a> | <a href="https://nationsglory.fr/" target="_blank">Télécharger</a> | Crack              
             </div>
            </aside>

                        <?php include('footer2.php'); ?>
            </div>
        </body>
</html>