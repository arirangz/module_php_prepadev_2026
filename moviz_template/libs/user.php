<?php

function loginUser(string $email, string $password):bool
{
    if  ($email === "test@gmail.com" && $password === "ABC123"){
        //regénéré l'id de session

        //On stock l'email dans la session

        return true;
    }
    return false;
}