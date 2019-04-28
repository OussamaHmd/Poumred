function valider ( )
{
    if ( document.formulaire.pseudo.value == "" )
    {
        alert ( "Veuillez entrer votre pseudo !" );
        valid = false;
return valid;
    }

    if ( document.formulaire.mdp1.value == "" )
    {
        alert ( "Veuillez entrer votre password !" );
        valid = false;
return valid;
}
    if ( document.formulaire.mdp2.value == "" )
    {
        alert ( "Veuillez entrer votre password again !" );
        valid = false;
        return valid;
}
    if ( document.formulaire.mail.value == "" )
    {
        alert ( "Veuillez entrer votre mail !" );
        valid = false;
        return valid;
}
    if ( document.formulaire.age.value == "" )
    {
        alert ( "Veuillez entrer votre age !" );
        valid = false;
return valid;
}
    if ( document.formulaire.age.value >= 150  || document.formulaire.age.value <= 0 )
    {
        alert ( "L'age doit etre compris entre 0 et 100");
        valid = false;
return valid;
    }

    if ( document.formulaire.mdp1.value != document.formulaire.mdp2.value)
    {
        alert ( "Les mots de passe doivent etre identique !" );
        valid = false;
        return valid;
}
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(document.formulaire.mail.value)){
      alert("Le mail doit etre sous forme : xx@xx.fr");
      valid = false;
        return valid;
   }


}
