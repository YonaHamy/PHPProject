<?php


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

?>