<?php
try
{
    $pdo = new PDO("mysql:dbname=keyce_test;host=localhost;charset=utf8mb4", "root", "");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$query = $pdo->prepare("SELECT * FROM user");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($users as $user) {
    echo $user["first_name"]." ".$user["last_name"]."<br>";
}

?>
