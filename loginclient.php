<?php
session_start();

$host = "localhost";
$user ="root";
$pass = "root";
$name ="PHPProject";

try{

    $pdo = new PDO("mysql:host=$host;dbname=$name",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e){
    echo "Impossible de se connecter à la base de données !" . $e->getMessage();
}
if (isset($_POST) AND !empty($_POST)) {

    if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {

        $req = $pdo->prepare("SELECT * FROM Client WHERE Nom = :username AND Mail = :password ");

        $req->execute([

            'username' => $_POST['username'],
            'password' => $_POST['password'],

        ]);


        $user = $req->fetchObject();

        if ($user) {

            $_SESSION['admin'] = $_POST['username'];
            $_SESSION['admin'] = $_POST['password'];
            header("Location: DemandeMission.php");
            exit;


        }

    }

    else{

        echo "Veuillez remplir tous les champs !";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="PhpProject.css">
    <meta charset="utf-8">

</head>

<body>


<br>

<h1 style="font-size: 85px; font-family: MyCustomFont,serif; color: white">Connexion</h1>

<br/><br/>
<br><br>

<form action="loginclient.php" method="POST">

    <input type="text" name="username" class="username">
    <br>
    <input type="password" name="password" class="password">
    <br><br>
    <button class="connexion">Connexion</button>

</form>