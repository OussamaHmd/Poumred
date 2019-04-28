<?
 


$fichier = fopen('fichier.txt', 'r+');
$compteur=0;

$username=$_POST['pseudo'];
        $password=$_POST['password'];
        $email=$_POST['mail'];
        $age=$_POST['age'];

if ($fichier)

{
    while (!feof($fichier))
    {
        
        $ligne = fgets($fichier);
        $tableau = explode('/', $ligne);

        if ($tableau[0] == $_POST['pseudo']) {
            $compteur = $compteur + 1;

        }
        
    }

    if ($compteur >= 1 ){ 

       header( 'Location: acueil.html');
       
        


    }
    else
    {
        if (!empty($_POST['pseudo']) && !empty($_POST['password']) &&  !empty($_POST['mail']) &&  !empty($_POST['age'])) {
            file_put_contents("fichier.txt", $username ."/". $password ."/". $email ."/". $age."\r\n" ,FILE_APPEND);

        }
        header( 'Location: acueil.html');
        
    }


    fclose($fichier);
}

?>


    