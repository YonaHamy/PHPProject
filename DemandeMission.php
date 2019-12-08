<?php
//ini_set('display_errors', 'on');
include 'db.php';
include 'Gestionnaire.php';
include 'Mission.php';
if(!empty($_POST)){

        //echo 'gfhzjkdjf';
        $Mission = new Mission($_POST['Nom'],$_POST['Client'],$_POST['Experts'],$_POST['Prix'],$_POST['DateDebut'],$_POST['DateFin']);
        $Gestionnaire = new Gestionnaire($pdo);
        $Gestionnaire->addMission($Mission);

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Demande Mission</title>
    <link rel="stylesheet" type="text/css" href="PhpProject.css">
    <meta charset="utf-8">

</head>

<body>

<h1 style="font-size: 80px; font-family: MyCustomFont,serif; color: white">Demander une Mission</h1>

<br/><br/>

<form method="POST" action="" class="well">
    <div class="form-group">
        <label>Nom :</label>
        <textarea name="Nom" rows="1" class="form-control" placeholder="Nom de la Mission" required></textarea>
    </div>

    <div class="form-group">
        <label>Client :</label>
        <textarea name="Client" rows="1" class="form-control" placeholder="Nom du Client" required></textarea>
    </div>

    <div class="form-group">
        <label>Experts :</label>
        <textarea name="Experts" rows="1" class="form-control" placeholder="Experts de la Mission" required></textarea>
    </div>

    <div class="form-group">
        <label>Prix :</label>
        <textarea name="Prix" rows="1" class="form-control" placeholder="Prix de la Mission" required></textarea>
    </div>

    <div class="form-group">
        <label>Date Debut :</label>
        <input type="date" name="DateDebut" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Date de Fin :</label>
        <input type="date" name="DateFin" class="form-control" required>
    </div>






    <button type="submit" class="btn-success">Demander la Mission</button>
    <br>
</form>

