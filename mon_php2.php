<?php
$fichier = fopen('fichier.txt', 'r+');
$compteur=0;

if ($fichier)

{
	while (!feof($fichier))
	{
		
		$ligne = fgets($fichier);
		$tableau = explode('/', $ligne);

		if ($tableau[0] == $_POST['pseudo_connexion']&& $tableau[1] == $_POST['password_connexion']) {
			$compteur = $compteur + 1;
		}
		else
			header( 'Location: acueil.html' );
		
	}
	if ($compteur > 0 ){

		header( 'Location: recherche.php');
	}
	else
	{
   		header( 'Location: acueil.html' );
	}

	fclose($fichier);
}

?>
