<?php 
    $Nom     = $_GET['Nom'];
    $Prénom  = $_GET['Prénom'];
    $Email   = $_GET['Email'];
    $Message = $_GET['Message'];

    $Message = 'Expéditeur : ' . $Email . "\r\n" .
               'Nom : ' . $Nom . "\r\n" .
               'Prénom : ' . $Prénom . "\r\n" .
               'Message : ' . $Message;

    $To      = 'egardent.pro@gmail.com';
    $Objet   = $_GET['Objet'];
    $Headers = 'From: site@egardent.fr' . "\r\n" .
               'Reply-To: site@egardent.fr' . "\r\n" ;
    
    mail($To, $Objet, $Message, $Headers);
    header("Location: https://www.egardent.fr/#me_contacter"); 
    exit();