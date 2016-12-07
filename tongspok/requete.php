<?php

if (isset($_GET['humi']) && isset($_GET['temp'])) {
	// on affiche nos résultats
	echo 'La temperature est de '.$_GET['temp']." et l'humidité est de ".$_GET['humi'];
}
