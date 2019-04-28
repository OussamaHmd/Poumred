<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Accueil Connexion</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="projet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<header class="w3-container w3-teal">
  <h1>Resultat</h1>

</header>

<div class="w3-display-container w3-animate-opacity">
  <img src="livre4.jpg" alt="livre" style="width:100%;min-height:200px;max-height:450px;">


<div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="acueil.html" class="w3-bar-item w3-button w3-large"> <i class="w3-margin-left fa fa-home"> Deconnexion</i></a>
  <a href="recherche.html" class="w3-bar-item w3-button w3-large">Recherche</a>
  <a href="resultat.php " class="w3-bar-item w3-button w3-large">Resultat</a>
</div>




<section id="livre" class="w3-center">

<h1 class="w3-center" style="margin-top: 40px;">Livre que vous recherchez : </h1>


<div class="w3-container " style="display: flex; flex-direction: row; justify-content: center;margin-bottom: 20px;">
  
  
  <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-red" style="margin-bottom: 20px;">
      <h1><?echo $_SESSION['titre']; ?></h1>
    </header>

    <div class="w3-container">
      
      <img style="width: 300px; height: 400px" src=" <?echo $_SESSION['image'];?>">
      <p>Livre ecrit par le célèbre <?echo $_SESSION['auteur'];?></p>
      <p>Description : <?echo $_SESSION['description'];?> </p>
      <p>Prix en Magazin : <?echo $_SESSION['prix']?></p>
    </div>


    <footer class="w3-container w3-red">
      <h5>Edition <?echo $_SESSION['editeur'];?></h5>
    </footer>
    </div>




</section>

 <a  href="recherche.php" style="text-decoration: none;"><button class="w3-button w3-red" style="margin-left: 10px; margin-bottom: 20px;"> << Retour </button></a>



<footer class="w3-container w3-teal">
  <h5>Oussama Hammad</h5>
  <p class="w3-center">Projet Bibliothèque Universitaire 2019</p>
  <div>
    <p class="w3-center">Rejoignez nous sur les Réseaux sociaux : <br>

      <a href="https://fr-fr.facebook.com"><img src="facebook.png" alt="Norway" style="width: 50px; height: 50px;"></a> 
      <a href="https://twitter.com/?lang=fr"><img src="twitter.png" alt="Norway" style="width: 50px; height: 50px;"></a>
      <a href="https://plus.google.com/collections/featured?hl=fr"><img src="google.png" alt="Norway" style="width: 50px; height: 50px;"></a>
    

     </p>
  </div>
</footer>



</body>
</html>


	
