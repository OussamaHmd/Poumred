<?php
session_start();

$roman = "roman";


if ($_POST['type'] == $roman){


$fichier = fopen('livre.txt', 'r+');
$compteur=0;

if ($fichier)

{
	while (!feof($fichier))
	{
		
		$ligne = fgets($fichier);
		$tableau = explode('/', $ligne);

		if ($tableau[0] == $_POST['auteur'] && $tableau[1] == $_POST['titre'] && $tableau[2] == $_POST['editeur']) {
			$compteur = $compteur + 1;

			$description=$tableau[4];
			$_SESSION['description']= $description;

			$prix=$tableau[5];
			$_SESSION['prix']= $prix;

			$image=$tableau[3];
			$_SESSION['image']= $image;
		}
		
	}

	if ($compteur > 0 ){

		header( 'Location: resultat.php');


	}
else

{
   header('Location: recherche.php' );

   
}


$titre=$_POST['titre'];
$_SESSION['titre']= $titre;

$auteur=$_POST['auteur'];
$_SESSION['auteur']= $auteur;

$editeur=$_POST['editeur'];
$_SESSION['editeur']= $editeur;

	
	fclose($fichier);
}
}


$bande_dessine = "bande dessine";

if ($_POST['type'] == $bande_dessine){


$fichier = fopen('bande_dessine.txt', 'r+');
$compteur=0;

if ($fichier)

{
	while (!feof($fichier))
	{
		
		$ligne = fgets($fichier);
		$tableau = explode('/', $ligne);

		if ($tableau[0] == $_POST['auteur'] && $tableau[1] == $_POST['titre'] && $tableau[2] == $_POST['editeur']) {
			$compteur = $compteur + 1;

			$description=$tableau[4];
			$_SESSION['description']= $description;

			$prix=$tableau[5];
			$_SESSION['prix']= $prix;

			$image=$tableau[3];
			$_SESSION['image']= $image;
		}
		
	}

	if ($compteur > 0 ){

		header( 'Location: resultat.php');


	}
else
{
   header( 'Location: recherche.php' );
   
}


$titre=$_POST['titre'];
$_SESSION['titre']= $titre;

$auteur=$_POST['auteur'];
$_SESSION['auteur']= $auteur;

$editeur=$_POST['editeur'];
$_SESSION['editeur']= $editeur;

	
	fclose($fichier);
}
}





$manga = "manga";

if ($_POST['type'] == $manga){


$fichier = fopen('manga.txt', 'r+');
$compteur=0;

if ($fichier)

{
	while (!feof($fichier))
	{
		
		$ligne = fgets($fichier);
		$tableau = explode('/', $ligne);

		if ($tableau[0] == $_POST['auteur'] && $tableau[1] == $_POST['titre'] && $tableau[2] == $_POST['editeur']) {
			$compteur = $compteur + 1;

			$description=$tableau[4];
			$_SESSION['description']= $description;

			$prix=$tableau[5];
			$_SESSION['prix']= $prix;

			$image=$tableau[3];
			$_SESSION['image']= $image;
		}
		
	}

	if ($compteur > 0 ){

		header( 'Location: resultat.php');


	}
else
{
   header( 'Location: recherche.php' );
   
}


$titre=$_POST['titre'];
$_SESSION['titre']= $titre;

$auteur=$_POST['auteur'];
$_SESSION['auteur']= $auteur;

$editeur=$_POST['editeur'];
$_SESSION['editeur']= $editeur;

	
	fclose($fichier);
}
}

?>


</body>
</html>
