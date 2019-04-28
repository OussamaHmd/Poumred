<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Accueil Connexion</title>
<meta charset="utf-8" />
<script type="text/javascript" src=""></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="projet.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<header class="w3-container w3-teal">
  <h1>Recherche</h1>

</header>

<div class="w3-display-container w3-animate-opacity">
  <img src="livre2.png" alt="livre" style="width:100%;min-height:200px;max-height:450px;">


<div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="acueil.html" class="w3-bar-item w3-button w3-large"> <i class="w3-margin-left fa fa-home"> Deconnexion</i></a>
  <a href="recherche.php" class="w3-bar-item w3-button w3-large">Recherche</a>
</div>



<section  class="formulaire_accueil">

<form class="w3-container" style="text-align: center;" action="mon_php3.php" method="post">

  <h2>Votre Recherche</h2>

  <p>
  <label>Auteur</label>
  <input class="w3-input" type="text" style="width: 400px;" name="auteur" onchange="this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);"></p>
  <p>
  <label>Titre</label>
  <input class="w3-input" type="text" style="width: 400px;" name="titre"onchange="this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);"></p>
  <p>
  <label>Editeur</label>
  <input class="w3-input" type="text" style="width: 400px;" name="editeur"onchange="this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);"></p>
   <p>
       <label for="type">Categorie du livre : </label>
       <select name="type" id="type">
           <option >roman</option>
           <option >bande dessine</option>
           <option >manga</option>
         
         
       </select>
   </p>
   <p>
   <button class="w3-button w3-black w3-round-xxlarge" style="margin-top: 50px;" >Commencer la recherche</button>
   </p>
   

</form>

</section>

  <h2 class="w3-teal" style="margin-right: 900px;border-radius: 0px 10px 10px 0px;padding-left: 10px; ">Suggestion :</h2>


<div class="w3-container" style="display: flex;justify-content: space-between;">
  

  <div class="w3-card-4" style="width: 200px;margin-bottom: 10px;">
    <a href=""><img src="Economix.jpg" alt="Norway" style="width:200px;height: 250px;"></a>
    <div class="w3-container w3-center">
      <p>Economix, La finance n'aura plus aucun secret pour vous !</p>
    </div>
  </div>

  <div class="w3-card-4" style="width: 200px;margin-bottom: 10px;">
    <a href=""><img src="loup.jpg" alt="Norway" style="width:200px;height: 250px;"></a>
    <div class="w3-container w3-center">
      <p>Le loup et la cigogne, un classic.</p>
    </div>
  </div>

  <div class="w3-card-4" style="width: 200px;margin-bottom: 10px;">
    <a href=""><img src="fiction.jpg" alt="Norway" style="width:200px;height: 250px;"></a>
    <div class="w3-container w3-center">
      <p>Il n'est jamais trop tard pour éclore, un livre de fiction !</p>
    </div>
  </div>

  <div class="w3-card-4" style="width: 200px;margin-bottom: 10px;">
    <a href=""><img src="Fairy_tail.jpg" alt="Norway" style="width:200px;height: 250px;"></a>
    <div class="w3-container w3-center">
      <p>Fairy-Tail, un monde magic..</p>
    </div>
  </div>

</div>




<footer class="w3-container w3-teal">
  <h5>Oussama Hammad</h5>
  <p class="w3-center">Projet Bibliothèque Universitaire 2019 </p>
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


