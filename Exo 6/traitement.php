<?php
	// récupération des données saisies et test si elles sont vides ou non
	if ( empty ($_POST ["txt"]) == true) $jour = 0;  else 	$jour = $_POST ["txt"];
	
	// calcul de la consommation aux 100 kilométres puis affichage
	if($jour == 1)
	{
		echo "Le jour correspond au numéro: ".$jour." est Lundi";
	}
	else if($jour == 2)
	{
		echo "Le jour correspond au numéro: ".$jour." est Mardi";
	}
	else if($jour == 3)
	{
		echo "Le jour correspond au numéro: ".$jour." est Mercredi";
	}
	else if($jour == 4)
	{
		echo "Le jour correspond au numéro: ".$jour." est Jeudi";
	}
	else if($jour == 5)
	{
		echo "Le jour correspond au numéro: ".$jour." est Vendredi";
	}
	else if($jour == 6)
	{
		echo "Le jour correspond au numéro: ".$jour." est Samedi";
	}
	else if($jour == 7)
	{
		echo "Le jour correspond au numéro: ".$jour." est Dimanche";
	}
?>
