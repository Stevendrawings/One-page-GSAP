<?php
//R�cup�ration des valeurs des champs du formulaire
//changer ci-dessous votre adresse e-mail
$destinataire = "armelle@graphikchannel.com";
$objet = ucfirst($_POST['objet']);
$courriel = ucfirst($_POST['prenom']) . " " . ucfirst($_POST['nom']) . "<" . $_POST['mail'] . ">";
$texte = "Exp�diteur\n";
$texte .= "==========\n";
$texte .= "Civilit� : " . ucfirst($_POST['civilite']) . "\n";
$texte .= "Pr�nom : " . ucfirst($_POST['prenom']) . "\n";
$texte .= "Nom : " . ucfirst($_POST['nom']) . "\n";
$texte .= "Email : " . strtolower($_POST['mail']) . "\n\n";
$texte .= "Soci�t�: " . ucfirst($_POST['societe']) . "\n";
$texte .= "T�l�phone : " . ucfirst($_POST['tel']) . "\n";
$texte .= "Message\n";
$texte .= "=======\n";
$texte .= ucfirst($_POST['message']);
//Exp�dition du courriel
mail($destinataire, $objet, $texte, "From: " . $courriel .
"\nReply-To:" . $_POST['mail']);
//Redirection vers la page de confirmation 
header("Location: ../confirmation.html");
?>