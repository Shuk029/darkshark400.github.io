<!DOCTYPE html>
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
  	<div id=div2><span class=span1>Travail de recherche : Comment protéger ses données personnelles</span></div>
  	<br>
  	<div id=div2><span class=span1>Il existe plusieurs moyens pour se protéger :</span></div>
  	<br><br>
  	<div id=div1><span class=span2>Créer un profil sécurisé sur tout les sites que vous fréquentez comme les réseaux sociaux etc...</span></div>
  		<ul>
  		<li><div id=div1><span class=span3>Pour ce faire vous pouvez : </span></div></li>
  		<br>
  		<li><div id=div1><span class=span3>-Mettre votre profil en privé</span></div></li>
  		<br>
  		<li><div id=div1><img class=image1 src="profil insta.png" alt="profil instagram"/></div></li>
  		<br>
  		<li><div id=div1><span class=span3>-Créer une autre identité numérique</span></div></li>
  		<br>
  		<li><div id=div1><span class=span3>Comme ça en cas de piratage le hacker ne pourra pas remonter jusqu'à vous.</span></div></li>
  		</ul>
  	<div id=div1><span class=span2>Divulguer le MOINS d'informations possibles sur les réseaux sociaux, surtout pendant le périodes ou vous êtes vacance pour éviter les cambriolages</span></div>
  	<ul>
  		<li><div id=div1><span class = span3>-Désactiver la géolocalisation pour ne être traqué en permanence</span></div></li>
  	</ul>
  	<br><br>
  	<div id=div1><span class=span2>Accepter le MOINS de cookies possible</span></div>
  		<ul>
  		<li><div id=div1><span class=span3>Pour ce faire vous pouvez : </span></div>
  		<br>
  		<li><div id=div1><span class=span3>-Utiliser une extension de restriction des cookies</span></li></div>
  		<br>
  		<li><div id=div1><img class=image1 src="cookie.png" alt="cookies"/></li></div>
  		</ul>
  		<br>
  	<div id=div1><span class=span2>Utiliser des mots de passe compliqués</span></div>
  	<ul>
  		<li><div id=div1><span class=span3>Pour ce faire vous pouvez : </span></li>
  		<br>
  		<li><div id=div1><span class=span3>-Faire générer vos mots de passe par un générateur de mot de passe</span></li>
  		<br>
  		<li><div id=div1><img class=image1 src="mdp.png" alt="mdp"/></div></li>
  		<br>
  		<li><div id=div1><span class=span3>-Utiliser un password manager pour ne pas les oublier</span></div></li>
  	</ul>
  	<br>
	<div id=div1><span class=span2>Eviter d'aller sur des sites en HTTP, privilégier le HTTPSecure</span></div>
	<br><br><br>
	<div id=div1><span class=span2>Eviter de se connecter aux WIFIS publics, sinon il faut utiliser un vpn</span></div>
	<br><br><br>
	<div id=div1><span class=span2>Vérifier que l'adresse des sites est conformes pour éviter les attaques phishings</span></div>
	<ul>
		<li><div id=div1><span class=span3>Exemple d'attaque phishing avec Shellpish</span></div></li>
		<br>
		<li><div id=div1><a href=kali.mp4><img class=image1 src="video.png" alt="video" ></a></div></li>
	</ul>
	<br>
	<div id=div1><span class=span2>Utiliser un VPN (virtual private network)</span></div>
	<br><br>			
	<ul>
		<li><div id=div1><span class=span3>Il permet d'établir une connexion cryptée entre votre machine et un serveur connecté à internet</span></div></li>
		<br><br>
		<li><div id=div1><span class=span3>Vos données ne peuvent donc pas être volées</span></div></li>
		<br>
  		<li><div id=div1><img class=image1 src="vpn.png" alt="vpn"/></div></li>
	</ul>
	<br>
	<div id=div1><span class=span2>Utiliser un antivirus comme Avast qui possède un grand panel d'outils pratiques (mais pas McAfee -> logiciel suspect)</span></div>
	<ul>
		<li><div id=div1><img class=image1 src="avast.png" alt="avast"/></div></li>
	</ul>
	<br>
	<div id=div1><span class=span2>Faire attention aux fichiers (pièces jointes etc...) envoyées par des inconnus</span></div>
	<ul>
		<li><div id=div1><img class=image1 src="virus.png" alt="virus"/></div></li>
	</ul>
	<div id=div1><span class=span2>Utiliser des DNS fiables comme 1.1.1.1 sur Android, Iphone, Windows, linux, etc....</span></div>
	<ul>
		<li><div id=div1><img class=image2 src="dns.png" alt="dns"/></div></li>
	</ul>
</body>

    <?php
		}

	?>
</html>