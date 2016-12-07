<?php


// on définit un tableau contenant le nombre de page vues par mois : par exemple, on suppose que
//1500 pages du site ont été vues en janvier, 2450 en février, etc... Bien sur, pour que ce script soit
//vraiment valides, vous n'allez pas déclarer ce tableau, car sinon, les bâtons seront toujours les mêmes :)
//Vous allez plutôt effectuer une requête SQL sur votre base de données permettant de récupérer le nombre
//de pages vues de votre site par mois. Ensuite, il suffira d'appeler le script avec ces 12 paramètres
//dans votre page html (en faisant par exemple : <img src="./images/stats_year.php?
		//visite_par_mois[1]=1500.......">)


$donne[1]=24;
$donne[2]=26;
$donne[3]=10;
$donne[4]=19;
$donne[5]=21;
$donne[6]=26;
$donne[7]=18;
$donne[8]=20;
$donne[9]=36;
$donne[10]=11;
$donne[11]=14;
$donne[12]=7;


// on calcule le nombre de pages vues sur l'année

$max_humidity = max($donne);

// on spécifie le type d'image que l'on va créer, ici ce sera une image au format PNG
header ("Content-type: image/png");

// on définit la largeur et la hauteur de notre image
$largeur = 750;
$hauteur = 400;

// on crée une ressource pour notre image qui aura comme largeur $largeur et $hauteur comme hauteur
//(on place également un or die si la création se passait mal afin d'avoir un petit message d'alerte)

$im = @ImageCreate ($largeur, $hauteur) or die ("Erreur lors de la création de l'image");

// on place tout d'abord la couleur blanche dans notre table des couleurs (je vous rappelle donc que
//le blanc sera notre couleur de fond pour cette image).
$blanc = ImageColorAllocate ($im, 255, 255, 255);
imagecolortransparent($im, $blanc);
// on place aussi le noir dans notre palette, ainsi qu'un bleu foncé et un bleu clair
$noir = ImageColorAllocate ($im, 0, 0, 0);
$rouge = ImageColorAllocate ($im, 253, 2, 2);
$rouge_clair = ImageColorAllocate ($im, 253, 2, 2);


// on dessine un trait horizontal pour représenter l'axe du temps
ImageLine ($im, 20, $hauteur-40, $largeur-15, $hauteur-40, $noir);

// on affiche le numéro des 12 mois
for ($i=1; $i<=12; $i++) {
	if ($i==1) {
		ImageString ($im, 2, 42, $hauteur-38, $i, $noir);
	}
	else {
		ImageString ($im, 2, ($i)*42, $hauteur-38, $i, $noir);
	}
}

// on dessine un trait vertical pour représenter le nombre de pages vues
ImageLine ($im, 20, 30, 20, $hauteur-40, $noir);

// on affiche les legendes sur les deux axes ainsi que différents textes (note : pour que le script
//trouve la police verdana, vous devrez placer la police verdana dans un repertoire /fonts/)

imagettftext($im, 18, 0, $largeur-470, 20, $noir, "./fonts/verdana.ttf", "Humidité");

// on parcourt les douze mois de l'année
for ($mois=1; $mois <= 12; $mois++) {
	if ($donne[$mois]!="0") {
		// on calcule la hauteur du baton
		$hauteurImageRectangle = ceil(((($donne[$mois])*($hauteur-50))/$max_humidity));
		if ($mois=="1") {
			// si le mois est janvier, on affiche notre premier baton
			// on affiche le premier baton noir
			ImageFilledRectangle ($im, 42, $hauteur-$hauteurImageRectangle, 42+14, $hauteur-41, $noir);
			// on affiche le second baton, bleu foncé, qui sera un peu plus petit que le noir afin
			//de recouvrir une partie du noir
			ImageFilledRectangle ($im, 44, $hauteur-$hauteurImageRectangle+2, 42+12, $hauteur-41-1,
					$rouge);
			// on affiche le dernier baton, bleu clair, qui sera un peu plus petit que le bleu foncé
			//afin de recouvrir une partie du bleu foncé (on obtiendra ainsi un effet de dégradé)
			ImageFilledRectangle ($im, 48, $hauteur-$hauteurImageRectangle+2, 42+8, $hauteur-41-1,
					$rouge_clair);
		}
		else {
			// si le mois est different de janvier, on affiche les autres batons
			ImageFilledRectangle ($im, ($mois)*42, $hauteur-$hauteurImageRectangle, ($mois)*42+14,
					$hauteur-41, $noir);
			ImageFilledRectangle ($im, ($mois)*42+2, $hauteur-$hauteurImageRectangle+2, ($mois)*42+12,
					$hauteur-41-1, $rouge);
			ImageFilledRectangle ($im, ($mois)*42+6, $hauteur-$hauteurImageRectangle+2, ($mois)*42+8,
					$hauteur-41-1, $rouge_clair);
		}
	}
}

// on dessine le tout
Imagepng ($im);
?>