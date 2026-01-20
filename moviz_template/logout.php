<?php
session_start();
//Supprime les données de session du serveur
session_destroy();
//Supprime les données du tableau $_SESSION
session_unset();

//On redirige l'utilisateur vers la page de login
header("Location: login.php");