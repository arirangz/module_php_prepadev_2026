<?php

function loginUser(PDO $pdo, string $email, string $password):bool
{
    // On tente de récupérer un utilisateur à partir de l'email
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);


    if  ($user && password_verify($password, $user["password"])){
        //regénéré l'id de session (sécurité: fixation de session)
        session_regenerate_id(true);
        //On stock l'email dans la session
        $_SESSION["email"] = $user["email"];
        $_SESSION["nickname"] = $user["nickname"];
        return true;
    }
    return false;
}

function addUser(PDO $pdo, string $nickname, string $email, string $password):bool
{
    
}