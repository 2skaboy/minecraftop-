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
    background: url(images/fond.png);
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
        margin-left: 10px;

    }
    #logo_serveur1
    {
        float: left;
        border-right: 3px solid gold;
        margin-left: 10px;
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
        margin-left: 10px;
        padding-bottom: 20px;
        width: 750px;
        border-radius: 10px;
        background-color: #606060;


    }
    #logo_serveur2
    {
        float: left;
        border-right: 3px solid #282828;
        margin-left: 13px;
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
        margin-left: 10px;



    }
    #logo_serveur3
    {
        float: left;
        border-right: 3px solid #602904;
        margin-left: 10px;


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
        margin-left: 10px;

    }
    #logo_serveur
    {
        float: left;
        border-right: 3px solid green;
        margin-left: 10px;
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
    margin-left: 175px;
    margin-right: 175px;
}



        </style>

        <title>Serveurs Minis-Jeux | Minecraft-Top</title>
    
        </head>
            <body>
            <div id="fond">
                <div id="bloc_page">

                <header>
                    <div id="titre_principal">
                    <div id="logo">
                    <h1>Serveurs Minis-Jeux</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>

                    </header>   
            <aside>
            <table>
                        <p>---| 👑 Liste des serveurs 👑 |---</p>

                    <div id="logo_serveur1">
                        <img src="images/logohypixel.png" style="float: left;"/>
                    </div>
                    <div id="serveur1"> 
                     🥇 <a href="hypixel.php">Hypixel</a> | ip: mc.hypixel.net | Premium 1.8 - 1.15
                    </div>

                    <div id="logo_serveur2">
                        <img src="images/logorinaorc.png" style="float: left;"/>
                    </div>
                    <div id="serveur2"> 
                     🥈 <a>Rinaorc</a> | ip: play.rinaorc.com | Crack 1.7 - 1.15
                    </div>

                    <div id="logo_serveur3">
                       <img src="images/logofuncraft.png" style="float: left;"/>
                    </div>
                    <div id="serveur3"> 
                     🥉 <a>Funcraft</a> | ip: funcraft.net | Crack 1.9.4
                    </div>




                <div id="logo_serveur">
                  <img src="images/logoepikube.png" style="float: left;"/>
                </div>
                <div id="serveur"> 
                 4️⃣ <a>Epikube</a> | ip: play.epikube.fr | Premium 1.8 - 1.15
                </div>


                <div id="logo_serveur">
                  <img src="images/logosnapcraft.png" style="float: left;"/>
                </div>
                <div id="serveur"> 
                 5️⃣ <a>SnapCraft</a> | mc.snapcraft.net | Premium 1.15.2
                </div>


                <div id="logo_serveur">
                 <img src="images/logohivemc.png" style="float: left; margin-top: 30px;"/>
                </div>
                <div id="serveur"> 
                 6️⃣ <a>Hivemc</a> | ip: play.hivemc.com | Premium 1.15 
                </div>


                <div id="logo_serveur">
                 <img src="images/logomineplex.png" style="float: left; border-bottom: 3px solid green"/>
                </div>
                <div id="serveur"> 
                 7️⃣ <a>Mineplex</a> | eu.mineplex.com | Premium 1.8 - 1.15
                </div>


                <div id="logo_serveur">
                  <img src="images/logoextremecraft.png" style="float: left; border-bottom: 3px solid green; margin-left: 5px;"/>
                </div>
                <div id="serveur"> 
                 8️⃣ <a>ExtremeCraft</a> play.extremecraft.net | Premium 1.8 - 1.15
                </div>


                <div id="logo_serveur">
                  <img src="images/no_logo.png" style="float: left;"/>
                </div>
                <div id="serveur"> 
                 9️⃣ <a>NeoliaMC</a> | neoliaMC  play.neoliamc.fr | 1.8 - 1.15
                </div>


                <div id="logo_serveur">
                  <img src="images/logounitale.png" style="float: left;"/>
                </div>
                <div id="serveur"> 
                 🔟 <a>Unitale</a> | ip: play.unitale.fr | Premium 1.10 - 1.15
                </div>
            </table>
            </aside>

                        <?php include('footer.php'); ?>
            </div>
        </body>
</html>