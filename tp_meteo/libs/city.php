<?php

function getCities():array
{
    $cities = [
        ["name" => "Montpellier", "weather" => "ensoleillé", "min_temp" => 4, "max_temp"=>6, "wind" => 30, "humidity"=>60],
        ["name" => "Toulouse", "weather" => "ensoleillé", "min_temp" => 1, "max_temp"=>8, "wind" => 10, "humidity"=>63],
        ["name" => "Paris", "weather" => "pluie", "min_temp" => 1, "max_temp"=>2, "wind" => 12, "humidity"=>65],
        ["name" => "Marseille", "weather" => "ensoleillé", "min_temp" => 8, "max_temp"=>9, "wind" => 25, "humidity"=>72],
        ["name" => "Nantes", "weather" => "neige", "min_temp" => 0, "max_temp"=>4, "wind" => 18, "humidity"=>70],
    ];
    return $cities;
}

function getCityByIndex(int $index):array
{
    $cities = getCities();

    return $cities[$index];
}