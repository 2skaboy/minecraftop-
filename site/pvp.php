<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
.element:nth-child(1)
{
    background-color: #FF2626;
    width: 650px;
    margin: 8px;
    padding: 3px;
    font-size: 20px;
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
    background: url(images/fondpvp.png);
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
    #serveur2
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid #3F3F3F;
        padding: 30px; 
        margin: 20px;
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 523px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur2
    {
        float: left;
        margin-left: 20px;
        border-right: 3px solid #3F3F3F;
        
    }
    #serveur3
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid rgb(61, 27, 5);
        padding: 30px; 
        margin: 20px;
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 523px;
        border-radius: 10px;
        background-color: #606060;
    }
    #logo_serveur3
    {
        float: left;
        margin-left: 20px;
        border-right: 3px solid rgb(114, 49, 5);
        
    }
    #serveur1
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid gold;
        padding: 30px; 
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 523px;
        border-radius: 10px;
        background-color: #606060;
        margin-top: 20px;
        margin-left: 20px;
        margin-bottom: 30px;
        margin-right: 20px;

    }
    #logo_serveur1
    {
        float: left;
        margin-left: 25px;
        border-right: 3px solid gold;
        
    }
    #serveur
    {
        color: #002813;
        text-align: center;
        font-size: 33px;
        font-family: Impact;
        border: 3px solid green;
        padding: 30px; 
        margin-bottom: 25px;
        float: initial;
        padding-bottom: 20px;
        width: 523px;
        border-radius: 10px;
        background-color: #606060;
        margin-left: 25px;

    }
    #logo_serveur
    {
        float: left;
        border-right: 3px solid green;
        margin-left: 25px;
        
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
    #desc
    {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 30px;
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

        <title>Serveurs 100% PvP | Minecraft-Top</title>
    
        </head>
            <body>
            <div id="fond">
                <div id="bloc_page">

                <header>
                    <div id="titre_principal">
                    <div id="logo">
                    <h1>Serveurs 100% PvP 🏹</h1>
                    </div>
                    </div>
        
                    <?php include("menu.php"); ?>

                    </header>  
                    <div id="desc">
                    <div class="element">
                        [!] Les serveurs 100% PvP sont les serveurs où les principaux modes de jeux</br>
                        sont les UHC, duels, practice etc ... [!]
                    </div>
                    </div>
            <aside>
                        <p>---| 👑 Liste des serveurs 👑 |---</p>
                <div id="logo_serveur1">
                    <img src="images/logoerisium.png" style="float: left;"/>
                </div>
                <div id="serveur1"> 
                 🥇 <a>Erisium</a> | ip: mc.erisium.com
                </div>
                <div id="logo_serveur2">
                    <img src="images/logounicraft.png" style="float: left;"/>
                </div>
                <div id="serveur2"> 
                 🥈 <a>Unicraft</a> ip: play.unicraft.fr
                </div>
                <div id="logo_serveur3">
                    <img src="images/logotimolia.png" style="float: left;"/>
                </div>
                <div id="serveur3"> 
                 🥉 <a>Timolia</a> | ip: timolia.de
                </div>




                <div id="logo_serveur">
                    <img src="images/logofluxpvp.png" style="float: left;"/>
                </div>
                <div id="serveur"> 
                 4️⃣ <a>FluxPvP</a> | play.fluxpvp.net
                </div>


            </aside>

                        <?php include('footer.php'); ?>
            </div>
        </body>
</html>