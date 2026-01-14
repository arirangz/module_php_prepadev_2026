<?php

function getMovies(PDO $pdo):array
{
    // On prépare la requête
    $query = $pdo->prepare("SELECT * FROM movie");
    // On exécute la requête
    $query->execute();
    // On récupère les films dans un tableau
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);

    return $movies;
}

function getMovieByIndex(int $index):array|false
{
    $movies = getMovies();

    if (isset($movies[$index])) {
        return $movies[$index];
    }
    return false;
}

