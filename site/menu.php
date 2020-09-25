
<nav>
    <ul>
        <div id="heure">
        <?php  
        echo date('H');
        echo "h:";
        echo date('i');
        date_default_timezone_set('Europe/Paris');
        ?>
        </div>
        <li><a>       </a></li>
        <li><a>   |   </a></li>
        <li><a style="font-family: Impact;"  href="index.php">Accueil</a></li>
        <li><a>   |   </a></li>
        <li><a style="font-family: Impact;" href="actus.php">Actus 🔔</a></li>
        <li><a>   |   </a></li>
        <li><a style="font-family: Impact;" href="contact.php">Liens Utiles</a></li>
                            
    </ul>
</nav>