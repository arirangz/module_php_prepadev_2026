<?php
try
{
    $pdo = new PDO("mysql:dbname=keyce_test;host=localhost;charset=utf8mb4", "root", "");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$id = (int)$_GET['id'];
$query = $pdo->prepare("SELECT * FROM user WHERE id = :id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
//fetch() nous permet de récupérer une seule ligne
$user = $query->fetch(PDO::FETCH_ASSOC);
//$user est un tableau association qu’on peut manipuler comme on l’a vu précédemment
var_dump($user);


?>
