<?php

function getMovies():array
{
    $movies = [
        ["title" => "Inception", "summary" => "Dom Cobb est un voleur expérimenté dans l'art périlleux de l'extraction : sa spécialité consiste à s'approprier les secrets les plus précieux d'un individu, enfouis au plus profond de son subconscient, pendant qu'il rêve et que son esprit est particulièrement vulnérable.", "release_date" => "21/07/2010"],
        ["title" => "Matrix", "summary" => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. À cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus", "release_date" => "23/06/1999"],
        ["title" => "Triangle of sadness", "summary" => "près la Fashion Week, Carl et Yaya, couple de mannequins et influenceurs, sont invités sur un yacht pour une croisière de luxe. Tandis que l'équipage est aux petits soins avec les vacanciers, le capitaine refuse de sortir de sa cabine alors que le fameux dîner de gala approche.", "release_date" => "28/09/2022"],

    ];
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