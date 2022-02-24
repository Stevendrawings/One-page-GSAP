<?php
//Récupération des valeurs des champs du formulaire
//changer ci-dessous votre adresse e-mail
$destinataire = "armelle@graphikchannel.com";
$objet = ucfirst($_POST['objet']);
$courriel = ucfirst($_POST['prenom']) . " " . ucfirst($_POST['nom']) . "<" . $_POST['mail'] . ">";
$texte = "Expéditeur\n";
$texte .= "==========\n";
$texte .= "Civilité : " . ucfirst($_POST['civilite']) . "\n";
$texte .= "Prénom : " . ucfirst($_POST['prenom']) . "\n";
$texte .= "Nom : " . ucfirst($_POST['nom']) . "\n";
$texte .= "Email : " . strtolower($_POST['mail']) . "\n\n";
$texte .= "Société: " . ucfirst($_POST['societe']) . "\n";
$texte .= "Téléphone : " . ucfirst($_POST['tel']) . "\n";
$texte .= "Message\n";
$texte .= "=======\n";
$texte .= ucfirst($_POST['message']);
//Expédition du courriel
mail($destinataire, $objet, $texte, "From: " . $courriel .
"\nReply-To:" . $_POST['mail']);
//Redirection vers la page de confirmation 
header("Location: ../confirmation.html");
?>