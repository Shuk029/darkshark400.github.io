﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="travail de recherche.css" />
    <title>Travail de recherche : Comment proteger ses données personnelles</title>
</head>

    <?php



		if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] !=  "password")
		{


			echo 'Vous n\'avez rien a faire ici!';


		}


		else
		{

		echo '';
			?>

<body>
    <div id="conteneur">
        <span class=allspan>
            <h1 class=h11><span class=span1>Travail de recherche : Comment protéger ses données personnelles</span></h1>
            <span class=span1 style="font-size: x-large;">Il existe plusieurs moyens pour se protéger :</span>
            <br><br>
            <span class=span2>Créer un profil sécurisé sur tout les sites que vous fréquentez comme les réseaux sociaux etc...</span>
            <ul>
                <li><span class=span3>Pour ce faire vous pouvez : </span></li>
                <br>
                <li><span class=span3>-Mettre votre profil en privé</span><br><br></li>
                <li><img class=image1 src="profil insta.png" alt="profil instagram" /></li>
                <br>
                <li><span class=span3>-Créer une autre identité numérique</span><br><br><span class=span3>Comme ça en cas de piratage le hacker ne pourra pas remonter jusqu'à vous.</span></li>
            </ul>
            <span class=span2>Divulguer le MOINS d'informations possibles sur les réseaux sociaux, surtout pendant le périodes ou vous êtes vacance pour éviter les cambriolages</span>
            <ul>
                <li><span class=span3>-Désactiver la géolocalisation pour ne être traqué en permanence</span></li>
            </ul>
            <br><br>
            <span class=span2>Accepter le MOINS de cookies possible</span>
            <ul>
                <li><p><span class=span3>Pour ce faire vous pouvez : </span></p>
                <li><span class=span3>-Utiliser une extension de restriction des cookies</span></li>
                <br>
                <li><img class=image1 src="cookie.png" alt="cookies" /></li>
            </ul>
            <br>
            <span class=span2>Utiliser des mots de passe compliqués</span>
            <ul>
                <li><span class=span3>Pour ce faire vous pouvez : </span></li>
                <br>
                <li><span class=span3>-Faire générer vos mots de passe par un générateur de mot de passe</span></li>
                <br>
                <li><img class=image1 src="mdp.png" alt="mdp" /></li>
                <br>
                <li><span class=span3>-Utiliser un password manager pour ne pas les oublier</span></li>
            </ul>
            <br>
            <span class=span2>Eviter d'aller sur des sites en HTTP, privilégier le HTTPSecure</span>
            <br><br><br>
            <span class=span2>Eviter de se connecter aux WIFIS publics, sinon il faut utiliser un vpn</span>
            <br><br><br>
            <span class=span2>Vérifier que l'adresse des sites est conformes pour éviter les attaques phishings</span>
            <ul>
                <li><span class=span3>Exemple d'attaque phishing avec Shellpish</span></li>
                <br>
                <li><a href=kali.mp4><img class=image1 src="video.png" alt="video"></a></li>
            </ul>
            <br>
            <span class=span2>Utiliser un VPN (virtual private network)</span>
            <br><br>
            <ul>
                <li><span class=span3>Il permet d'établir une connexion cryptée entre votre machine et un serveur connecté à internet</span></li>
                <br>
                <br>
                <li><span class=span3>Vos données ne peuvent donc pas être volées</span></li>
                <br>
                <li><img class=image1 src="vpn.png" alt="vpn" /></li>
            </ul>
            <br>
            <span class=span2>Utiliser un antivirus comme Avast qui possède un grand panel d'outils pratiques (mais pas McAfee -> logiciel suspect)</span>
            <ul>
                <li><img class=image1 src="avast.png" alt="avast" /></li>
            </ul>
            <br>
            <span class=span2>Faire attention aux fichiers (pièces jointes etc...) envoyées par des inconnus</span>
            <ul>
                <li><img class=image1 src="virus.png" alt="virus" /></li>
            </ul>
            <span class=span2>Utiliser des DNS fiables comme 1.1.1.1 sur Android, Iphone, Windows, linux, etc....</span>
            <ul>
                <li><img class=image2 src="dns.png" alt="dns" /></li>
            </ul>

        </span>
    </div>
</body>

    <?php
		}

	?>
</html>