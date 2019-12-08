<?php
//ini_set('display_errors', 'on');
include 'db.php';
include 'Gestionnaire.php';
include 'Experts.php';
if(!empty($_POST)){

    //echo 'gfhzjkdjf';
    $Experts = new Experts($_POST['Nom'],$_POST['Prenom'],$_POST['Mail'],$_POST['Qualification'],$_POST['Responsable'],$_POST['Departement']);
    $Gestionnaire = new Gestionnaire($pdo);
    $Gestionnaire->addExperts($Experts);

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Experts</title>
    <link rel="stylesheet" type="text/css" href="PhpProject.css">
    <meta charset="utf-8">

</head>

<body>

<h1 style="font-size: 80px; font-family: MyCustomFont,serif; color: white">Nouvel Experts</h1>

<br/><br/>

<form method="POST" action="" class="well">
    <div class="form-group">
        <label>Nom :</label>
        <textarea name="Nom" rows="1" class="form-control" placeholder="Nom de la Mission" required></textarea>
    </div>

    <div class="form-group">
        <label>Prenom :</label>
        <textarea name="Prenom" rows="1" class="form-control" placeholder="Nom du Client" required></textarea>
    </div>

    <div class="form-group">
        <label>Mail :</label>
        <textarea name="Mail" rows="1" class="form-control" placeholder="Mail" required></textarea>
    </div>

    <div class="form-group">
        <label>Qualification :</label>
        <textarea name="Qualification" rows="1" class="form-control" placeholder="Qualification" required></textarea>
    </div>

    <div class="form-group">
        <label>Responsable :</label>
        <textarea name="Responsable" rows="1" class="form-control" placeholder="oui/non" required></textarea>
    </div>

    <div class="form-group">
        <label>Departement :</label>
        <textarea name="Departement" rows="1" class="form-control" placeholder="Deprtement " required></textarea>
    </div>






    <button type="submit" class="btn-success">Ajouter un Experts</button>
    <br>
</form>

