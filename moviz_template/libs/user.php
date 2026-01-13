<?php

function loginUser(string $email, string $password):bool
{
    if  ($email === "test@gmail.com" && $password === "ABC123"){
        //regénéré l'id de session (sécurité: fixation de session)
        session_regenerate_id(true);
        //On stock l'email dans la session
        $_SESSION["email"] = $email;
        return true;
    }
    return false;
}