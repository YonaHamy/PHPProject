<?php

//ini_set('display_errors', 'on');
include 'db.php';
include 'Gestionnaire.php';
include 'Client.php';
if(!empty($_POST)){

    echo 'gfhzjkdjf';
    $Client = new Client($_POST['Nom'],$_POST['Prenom'],$_POST['Mail'],$_POST['Entreprise'],$_POST['NumeroSIRET']);
    $Gestionnaire = new Gestionnaire($pdo);
    $Gestionnaire->addClient($Client);

}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Informations Client</title>
    <link rel="stylesheet" type="text/css" href="PhpProject.css">
    <meta charset="utf-8">

</head>

<body>

<h1 style="font-size: 80px; font-family: MyCustomFont,serif; color: white">Informations Client</h1>

<br/><br/>

<form method="POST" action="" class="well">
    <div class="form-group">
        <label>Nom :</label>
        <textarea name="Nom" rows="1" class="form-control" placeholder="Nom de la Mission" required></textarea>
    </div>

    <div class="form-group">
        <label>Prenom :</label>
        <textarea name="Prenom" rows="1" class="form-control" placeholder="Prenom du Client" required></textarea>
    </div>

    <div class="form-group">
        <label>Mail :</label>
        <textarea name="Mail" rows="1" class="form-control" placeholder="Mail de Contact" required></textarea>
    </div>

    <div class="form-group">
        <label>Entreprise :</label>
        <textarea name="Entreprise" rows="1" class="form-control" placeholder="Entreprise du Client" required></textarea>
    </div>

    <div class="form-group">
        <label>Numero de SIRET :</label>
        <textarea name="NumeroSIRET" rows="1" class="form-control" placeholder="Numero de SIRET " required></textarea>
    </div>






    <button type="submit" class="btn-success">S'inscrire</button>

    <br>
</form>

