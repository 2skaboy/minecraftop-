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
    background-color: darkgray;
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
        padding-bottom: 20px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur1
    {
        float: left;
        border-right: 3px solid gold;
        padding-left: 8px;
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
        padding-bottom: 20px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur2
    {
        float: left;
        border-right: 3px solid #282828;
        padding-left: 8px;
        margin-left: 20px;
        border-bottom: 3px solid #282828;
    }
    #serveur3
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid #602904;
        padding: 30px; 
        margin: 20px;
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur3
    {
        float: left;
        border-right: 3px solid #602904;
        padding-left: 8px;
        margin-left: 20px;
        border-bottom: 3px solid #602904;

    }
    #serveur
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid green;
        padding: 30px; 
        margin: 20px;
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur
    {
        float: left;

        padding-left: 8px;

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

        </style>

        <title>Serveurs PvP Factions Crackés et Français | Minecraft-Top</title>
    
        </head>
            <body>
            <div id="fond">
                <div id="bloc_page">

                <header>
                    <div id="titre_principal">
                    <div id="logo">
                    <h1>Serveurs PvP/Factions⛏</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>

                    </header> 
            <aside>
                        <p>---| Liste des serveurs (Français) |---</p>
                <div id="logo_serveur1">
                    <img src="images/logohadaria.png" style="float: left;"/>
                </div>
                <div id="serveur1"> 
                 🥇 <a href="hadaria.php">Hadaria</a> | ip: play.hadaria.fr | Crack 1.8 - 1.13
                </div>
                <div id="logo_serveur2">
                    <img src="images/logo_blood.png" style="float: left;"/>
                </div>
                <div id="serveur2"> 
                 🥈 <a>BloodSymphony</a> play.bloodsymphony.fr</br>  Crack 1.8 - 1.15
                </div>
                <div id="logo_serveur3">
                    <img src="images/no_logo.png" style="float: left;"/>
                </div>
                <div id="serveur3"> 
                 🥉 <a>BattleAdventure</a> play.battleadventure.eu  Crack 1.8 - 1.15
                </div>
                <div id="logo_serveur">
                    <img src="images/logochocolia.png" style="float: left; margin-left: 20px"/>
                </div>
                <div id="serveur"> 
                 4️⃣ <a>Chocolia</a> play.chocolia.eu</br>  Crack 1.7 - 1.15
                </div>
                <div id="logo_serveur">
                    <img src="images/logowos.png" style="float: left; margin-left: 20px"/>
                </div>
                <div id="serveur"> 
                 5️⃣<a>World of Skill</a> | PLAY.WORLDOFSKILL.FR:25565</br>  Crack 1.8 - 1.15
                </div>
                <div id="logo_serveur" style="margin-top: 10px;">
                    <img src="images/logolyzeria.png" style="float: left; margin-left: 20px"/>
                </div>
                <div id="serveur"> 
                 5️⃣<a>Lyzeria</a> | play.lyzeria.fr</br>  Crack 1.7 - 1.15
                </div>
            </aside>

                        <?php include('footer2.php'); ?>
            </div>
        </body>
</html>